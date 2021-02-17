<?php

namespace App\Http\Controllers;

use Auth;

class ModelController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  public function initial() {
    // Check the account for the expiration flag
    $this->checkForExpiration();
    return $this->getView("Assumptions");
  }
  
  private function checkForExpiration() {
    $user = Auth::user();
    $expirationDate = $user->expires;
    $today = \DateTime::createFromFormat('Y-m-d H:i:s', date("Y-m-d H:i:s"));
    $diff = $today->diff(new \DateTime($expirationDate));
    if ($user->flagForExpiration) {
      // Expire the account if out of the expiration date
      // Otherwise keep waiting and keep the flag true
      if ($diff->days <= 0) {
        $user->flagForExpiration = false;
        $user->account_type = 0;
        $user->save();
      }
    } else {
      // renew the account if it expired
      if ($diff->days <= 0) {
        // If the user doesn't log in then the number of days after expiration
        // needs to be subtracted from 365
        $daysLapsed = $diff->days;
        $user->expires = \DateTime::createFromFormat('Y-m-d H:i:s', date("Y-m-d H:i:s"))
                ->add(new \DateInterval('P'.(365 + $daysLapsed).'D'));
        $user->save();
      }
    }
  }

  public function rebuild() {
    $_SESSION[UserHasData] = false;
    return $this->initial();
  }

  public function getView($modelType) {
    switch ($modelType) {
      case "Assumptions":
        return view('models.assumptions');
      case "LeadsAssumptions":
        return view('models.lead_assumptions');
        case "EconomicModelBuyers":
        return view('models.economic_model_buyers');
      case "EconomicModelSellers":
        return view('models.economic_model_sellers');
      case "LeadGenerationModel":
        return view('models.lead_generation_model');
      case "LongTermPlanning":
        return view('models.long_term_planning');
      default:
        return $this->paidModels($modelType);
    }
  }

  public function paidModels($modelType) {
    if (Auth::user()->isPaid()) {
      switch ($modelType) {
        case "TeamAssumptions":
          return view('models.team_assumptions');
        case "BudgetModel":
          return view('models.budget_model');
        case "AnnualActionPlan":
          return view('models.annual_action_plan');
        case "ThreeYearActionPlan":
          return view('models.three_year_action_plan');
        case "SomedayActionPlan":
          return view('models.someday_action_plan');
        case "Annual411":
          return view('models.annual411');
        case "GoalTracking":
          return view('models.goal_tracking');
      }
    }
    return redirect('/');
  }

}
