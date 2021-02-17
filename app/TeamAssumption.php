<?php

namespace App;

use App\Utility;
use Illuminate\Database\Eloquent\Model;

class TeamAssumption extends Model implements MREAModel {

  protected $fillable = ['agent_name', 'team_listings', 'team_sales',
      'personal_listings', 'personal_sales', 'split',
      'percent_of_total_sales', 'agent_id',
      'gross_commission_income', 'net_commission_income'];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public static function getAgent($userId, $agentId) {
    return TeamAssumption::where('user_id', '=', $userId)
                    ->where('agent_id', '=', $agentId)
                    ->first();
  }

  public function saveModel($data) {
    $dbcolnames = Utility::getDBColNamesFromFile("TeamAssumpsDBColNames");
    $i = 0;
    foreach ($dbcolnames as $dbcolname) {
      $this->fill([$dbcolname => $data[$i++]]);
    }
    $this->save();
  }

}
