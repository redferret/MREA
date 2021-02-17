<?php

namespace App\Http\Controllers;

use Auth;
use App\Utility;

class ContentController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  private function hasDataBeenServed() {
    return isset($_SESSION[UserHasData]) ?
            $_SESSION[UserHasData] : false;
  }

  public function fetchData() {
    if ($this->hasDataBeenServed()) {
      return ['containsData' => false];
    } else {
      return $this->data();
    }
  }

  private function data() {
    $admin = Auth::user();

    if ($admin->shadowedUser != null) {
      $user = $admin->shadowedUser;
    } else {
      $user = $admin;
    }

    $_SESSION[UserHasData] = true;

    return ['containsData' => true, 'accountType' => $user->account_type,
        'assumptions' => $this->buildAssumptions($user),
        'teamAssumptions' => $this->buildTeamAssumptions($user),
        'budgetModel' => $this->buildBudgetModel($user),
        'threeYearActionPlan' => $this->buildThreeYearActionPlan($user),
        'somedayActionPlan' => $this->buildSomedayActionPlan($user),
        'annual411' => $this->buildAnnual411($user),
        'goalTracking' => $this->buildGoalTracking($user)
    ];
  }

  private function buildGoalTracking($user) {
    $goalTrackings = $user->goalTrackings;
    $goalTrackingDBColNames = Utility::getDBColNamesFromFile("GoalTrackingDBColNames");
    $goalIndex = 0;
    $goalTrackingData = [];
    foreach ($goalTrackings as $goalTracking) {
      $monthIndex = 0;
      foreach ($goalTracking->monthlyGoalTrackings as $month) {
        $monthlyData[$monthIndex++] = $month->toArray();
      }
      $m['year'] = $goalTracking->year;
      $m['monthData'] = $monthlyData;
      $goalTrackingData[$goalIndex++] = $m;
    }

    return ['data' => $goalTrackingData, 'goalTrackingDBColNames' => $goalTrackingDBColNames];
  }

  private function buildAnnual411($user) {
    $annual411s = $user->annual411;
    $annual411DBColNames = Utility::getDBColNamesFromFile("Annual411DBColNames");
    $monthly411DBColNames = Utility::getDBColNamesFromFile("Monthly411DBColNames");
    $weekly411DBColNames = Utility::getDBColNamesFromFile("Weekly411DBColNames");

    $annual411Data = [];
    $monthly411Data = [];
    $weekly411Data = [];
    $annual411Index = 0;
    $a = [];
    $m = [];
    foreach ($annual411s as $annual411) {
      $annualData = $this->buildDataArray($annual411DBColNames, $annual411);
      $monthly411Index = 0;
      foreach ($annual411->monthly411 as $monthly411) {
        $monthlyData = $this->buildDataArray($monthly411DBColNames, $monthly411);
        $weekly411Index = 0;
        foreach ($monthly411->weekly411 as $weekly411) {
          $weekly411Data[$weekly411Index++] = $this->buildDataArray($weekly411DBColNames, $weekly411);
        }
        $m['monthlyData'] = $monthlyData;
        $m['weeklyData'] = $weekly411Data;
        $monthly411Data[$monthly411Index++] = $m;
        $weekly411Data = array();
        $m = array();
      }
      $a['annualData'] = $annualData;
      $a['monthly'] = $monthly411Data;
      $annual411Data[$annual411Index++] = $a;
      $monthly411Data = array();
      $a = array();
    }
    return ['data' => $annual411Data,
        'Annual411DBColNames' => $annual411DBColNames,
        'Monthly411DBColNames' => $monthly411DBColNames,
        'Weekly411DBColNames' => $weekly411DBColNames];
  }

  private function buildAssumptions($user) {
    $assumpsModel = $user->businessAssumption;
    $dbcolnames = Utility::getDBColNamesFromFile("AssumptionsDBColNames");
    return ['data' => $assumpsModel->toArray(), 'dbColNames' => $dbcolnames];
  }

  private function buildTeamAssumptions($user) {
    $teamAssumps = $user->teamAssumptions;
    $dbcolnames = Utility::getDBColNamesFromFile("TeamAssumpsDBColNames");
    $i = 0;
    $data = [];
    foreach ($teamAssumps as $agent) {
      $data[$i++] = $this->buildDataArray($dbcolnames, $agent);
    }
    return ['data' => $data, 'dbColNames' => null];
  }

  private function buildThreeYearActionPlan($user) {
    $plan = $user->threeYearPlan;
    return ['data' => $plan->goals, 'dbColName' => 'goals'];
  }

  private function buildSomedayActionPlan($user) {
    $plan = $user->somedayPlan;
    return ['data' => $plan->goals, 'dbColName' => 'goals'];
  }

  private function buildBudgetModel($user) {
    $budgetModel = $user->budgetModel;
    $dbcolnamesBudgetModel = Utility::getDBColNamesFromFile("BudgetModelDBColNames");

    $budgetItems = $budgetModel->budgetItems;

    $dbcolnames = Utility::getDBColNamesFromFile("BudgetItemsDBColNames");
    $i = 0;
    $budgetItemsPack = [];
    foreach ($budgetItems as $item) {
      $budgetItemsPack[$i++] = $this->buildDataArray($dbcolnames, $item);
    }

    return ['data' => $budgetModel->toArray(), 'dbColNames' => $dbcolnamesBudgetModel,
        'budgetItems' => $budgetItemsPack];
  }

  public function save($modelName) {
    $data = \Request::json()->all();
    $colData = [$data['dbColName'] => $data['value']];
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    switch ($modelName) {
      case "Assumptions":
        $user->businessAssumption->saveModel($colData);
        break;
      case "BudgetModel":
        $user->budgetModel->saveModel($colData);
        break;
      case "ThreeYearActionPlan":
        $user->threeYearPlan->saveModel($colData);
        break;
      case "SomedayActionPlan":
        $user->somedayPlan->saveModel($colData);
        break;
    }
  }

  private function buildDataArray($dbcolnames, $model) {
    $dataArray = [];
    $i = 0;
    foreach ($dbcolnames as $name) {
      $dataArray[$i++] = $model[$name];
    }
    return $dataArray;
  }

}
