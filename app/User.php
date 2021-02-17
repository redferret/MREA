<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Auth;
use DB;
use App\Utility;

class User extends Authenticatable implements MREAModel {

  use Notifiable;

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password', 'account_type', 'expires'
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

  public function shadowedUser() {
    return $this->hasOne(User::class);
  }

  public function admin() {
    return $this->belongsTo(User::class);
  }

  public function budgetModel() {
    return $this->hasOne(BudgetModel::class);
  }

  public function businessAssumption() {
    return $this->hasOne(BusinessAssumption::class);
  }

  public function teamAssumptions() {
    return $this->hasMany(TeamAssumption::class);
  }

  public function threeYearPlan() {
    return $this->hasOne(ThreeYearActionPlan::class);
  }

  public function somedayPlan() {
    return $this->hasOne(SomedayActionPlan::class);
  }

  public function annual411() {
    return $this->hasMany(Annual411::class);
  }

  public function goalTrackings() {
    return $this->hasMany(GoalTracking::class);
  }

  public function getDaysRemaining() {
    $user = Auth::user();
    $expiration = $user->expires;

    if ($user->isFreeVersion()) {
      return 'Unlimited';
    } else if ($user->isAdmin()) {
      return 'Admin';
    } else if ($expiration == null) {
      return 0;
    }
    $today = date("Y-m-d H:i:s");
    $break_1_start = \DateTime::createFromFormat('Y-m-d H:i:s', $today);
    $break_1_ends = \DateTime::createFromFormat('Y-m-d H:i:s', $expiration);

    //Calculate break 1 duration
    $break_1_dur = $break_1_start->diff($break_1_ends);
    return $break_1_dur->format('%a');
  }

  public static function build($data) {
    $user = User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => bcrypt($data['password']),
    ]);
    $user->businessAssumption()->save(BusinessAssumption::create());
    $user->businessAssumption->year_for_1year_model = date('Y');
    $user->businessAssumption->desired_closing_combination_met = 50;
    $user->businessAssumption->save();
    
    $agentSelf = ['agent_name' => $user->name, 'agent_id' => 1];
    $user->teamAssumptions()->save(TeamAssumption::create($agentSelf));

    $user->budgetModel()->save(BudgetModel::create());

    $user->threeYearPlan()->save(ThreeYearActionPlan::create(['goals' => ""]));
    $user->somedayPlan()->save(SomedayActionPlan::create(['goals' => ""]));

    $annual411 = Annual411::create(['year' => 0]);
    $annual411->build();
    $user->annual411()->save($annual411);

    $goalTracking = GoalTracking::create(['year' => 0]);
    $goalTracking->build();
    $user->goalTrackings()->save($goalTracking);

    return $user;
  }

  public function hasGoalTracking() {
    return count($this->goalTrackings) > 0;
  }

  public function isAdmin() {
    return $this->account_type == 3;
  }

  public function isFreeVersion() {
    return $this->account_type == 0;
  }

  public function isPaid() {
    return !$this->isFreeVersion();
  }

  public function isTeamGroup() {
    return $this->account_type == 2 || $this->isAdmin();
  }

  public function isSoloAgent() {
    return $this->account_type == 1;
  }

  public function saveModel($data) {
    $this->fill($data);
    $this->save();
  }

  public function accountType() {
    switch ($this->account_type) {
      case 0:
        return "Limited/Free";
      case 1:
        return "Solo Agent";
      case 2:
        return "Team/Group";
      case 3:
        return "Admin";
      default:
        return "Unknown";
    }
  }

  public static function deleteAnnual411s($user) {
    foreach ($user->annual411 as $annual411) {
      $annual411->delete();
    }
    $user->save();
  }

  protected static function boot() {
    parent::boot();

    static::deleting(function($user) {
      User::deleteAnnual411s($user);
      $user->somedayPlan()->delete();
      $user->threeYearPlan()->delete();
      $user->teamAssumptions()->delete();
      $user->businessAssumption()->delete();
      $user->budgetModel()->delete();
      $user->goalTrackings()->first()->delete();
    });
  }
  
  public static function tou() {
    // - Get all the users from the old database
    // 
    $users = DB::connection('oldDB')->select("SELECT username, firstname, lastname, email, version FROM mreauser WHERE username > ''");
    foreach ($users as $user) {
      try {
        $version = $user->version < 3 ? $user->version : 2;

        $firstname = $user->firstname;
        $lastname = $user->lastname;
        $name = $firstname . ' ' . $lastname;

        $email = $user->email;
        $password = $user->username . '2017';
        $data = array('name' => $name, 'email' => $email, 'password' => $password);

        $transferredUser = User::build($data);

        $transferredUser->expires = \DateTime::createFromFormat('Y-m-d H:i:s', date("Y-m-d H:i:s"))
                ->add(new \DateInterval('P365D'));
        $transferredUser->account_type = $version;
        $transferredUser->save();
        
        User::transferData($transferredUser, $user->username);
        
        // - Access each model with the user name
        // map each value to the correct model
        // May be best to write a function call for each model with the
        // user as a parameter. 
        
      } catch (\Exception $e) {
        echo "ERROR: " . $e->getMessage()."\n";
      }
    }
  }
  public static function transferData(User $transferredUser, $username) {
    User::transferAssumptions($transferredUser, $username);
    User::transferBudgetModel($transferredUser, $username);
    User::transferTeamAssumptions($transferredUser, $username);
    User::transferGoalTracking($transferredUser, $username);
    User::transferAnnual411($transferredUser, $username);
    echo $username . " has been transfered\n";
  }
  
  public static function transferAssumptions(User $transferredUser, $username) {
    $assumpsModel = $transferredUser->businessAssumption;
    $dbcolnames = Utility::getDBColNamesFromFile("AssumptionsDBColNames");
    $cols = "";
    for ($i = 1; $i < 36; $i++){
      if ($i != 34 && $i != 35) {
        $cols .= "var".$i.", ";
      }
    }
    $cols .= "var36";
    $values = DB::connection('oldDB')->select("SELECT ".$cols." FROM Assumptions WHERE username = ?", [$username])[0];
    $values = json_decode(json_encode($values), true);
    $i = 0;
    foreach ($values as $value) {
      $data = [$dbcolnames[$i++] => $value];
      $assumpsModel->fill($data);
    }
    $assumpsModel->save();
  }
  
  public static function transferBudgetModel(User $transferredUser, $username) {
    $budgetModel = $transferredUser->budgetModel;
    $oldModel = DB::connection('oldDB')->select("SELECT VAR19 AS lead_generation_exp, taxes AS tax FROM BudgetModelData WHERE username = ?", [$username])[0];
    $oldModelData = json_decode(json_encode($oldModel), true);
    $budgetModel->saveModel($oldModelData);
    
    $item = DB::select("SELECT MAX(item_id) AS item_id FROM budget_items WHERE budget_model_id = ?", [$budgetModel->id])[0];
    $item_id_start = $item->item_id + 1;
    
    $oldBudgetItems = DB::connection('oldDB')->select("SELECT "
            . "var1 as name,"
            . "var2 as last_year,"
            . "var3 as this_year,"
            . "expensetype as budget_type"
            . " FROM BudgetModel WHERE username = ?", [$username]);
    foreach ($oldBudgetItems as $oldBudgetItem) {
      $oldBudgetItemData = json_decode(json_encode($oldBudgetItem), true);
      $budgetItem = BudgetItem::create(['item_id' => ($item_id_start++)]);
      $budgetItem->fill($oldBudgetItemData);
      $budgetItem->save();
      $transferredUser->budgetModel->budgetItems()->save($budgetItem);
    }
  }
  
  public static function transferTeamAssumptions(User $transferredUser, $username) {
    // get each item from oldDB and map each value to the new item
    $oldteamAgents = DB::connection('oldDB')->select("SELECT "
            . "var1 as agent_name,"
            . "var2 as team_listings,"
            . "var3 as team_sales,"
            . "var4 as personal_listings,"
            . "var5 as personal_sales,"
            . "var6 as split,"
            . "var7 as percent_of_total_sales,"
            . "var8 as gross_commission_income,"
            . "var9 as net_commission_income"
            . " FROM TeamAssumptions WHERE username = ?", [$username]);
    foreach ($oldteamAgents as $oldAgent) {
      // Create a new agent for each old agent
      $agentData = json_decode(json_encode($oldAgent), true);
      // Make no duplicate
      if ($transferredUser->name != $oldAgent->agent_name) {
        $agent = TeamAssumption::create();
        $agent->fill($agentData);
        $transferredUser->teamAssumptions()->save($agent);
      }
    }
  }
  
  public static function transferGoalTracking(User $transferredUser, $username) {
    $dbcolnames = Utility::getDBColNamesFromFile("GoalTrackingDBColNames");
    $length = 264;
    for ($month = 0; $month < 12; $month++) {
      $variableMapping = "";
      $indexLength = ($month * 22) + 22;
      for ($i = $month * 22; $i < $indexLength; $i++) {
        $variableMapping .= "VAR" . ($i + 1) . " as " . $dbcolnames[$i % 22] . ", ";
      }
      $variableMapping .= "VAR". $indexLength." as " . $dbcolnames[21]. " ";
      $oldGoalTracking = DB::connection('oldDB')->select("SELECT "
            . $variableMapping
            . "FROM GoalTrackingData WHERE username = ?", [$username])[0];
    }
    
    $goalTrackingData = json_decode(json_encode($oldGoalTracking), true);
    $goalTracking = GoalTracking::create(['year' => 0]);
    $goalTracking->build();
    $goalTracking->fill($goalTrackingData);
    $transferredUser->goalTrackings()->save($goalTracking);
  }
  
  public static function transferAnnual411(User $transferredUser, $username) {
    $dbcolnames = Utility::getDBColNamesFromFile("Annual411DBColNames");
    
    $variableMapping = "";
    $indexLength = 9;
    for ($i = 0; $i < $indexLength; $i++) {
      $variableMapping .= "VAR" . ($i + 1) . " as " . $dbcolnames[$i+1] . ", ";
    }
    $variableMapping .= "VAR". $indexLength." as " . $dbcolnames[$indexLength - 1]. " ";
    $oldAnnual411Vars = DB::connection('oldDB')->select("SELECT "
          . $variableMapping
          . "FROM Annual411Data WHERE username = ?", [$username])[0];
    
    $strMapping = "";
    $strIndexLength = 5;
    for ($i = 0; $i < $strIndexLength; $i++) {
      $strMapping .= "STR" . ($i + 1) . " as " . $dbcolnames[($i + $indexLength)+1] . ", ";
    }
    $strMapping .= "STR". $strIndexLength." as " . $dbcolnames[($strIndexLength + $indexLength) - 1]. " ";
    $oldAnnual411Strs = DB::connection('oldDB')->select("SELECT "
          . $strMapping
          . "FROM Annual411Data WHERE username = ?", [$username])[0];
    
    $oldAnnual411VarsData = json_decode(json_encode($oldAnnual411Vars), true);
    $oldAnnual411StrsData = json_decode(json_encode($oldAnnual411Strs), true);
    $annual411 = $transferredUser->annual411()->first();
    $annual411->fill($oldAnnual411VarsData);
    $annual411->fill($oldAnnual411StrsData);
    $annual411->save();
  }
}
