<?php

namespace App\Http\Controllers;

use Auth;
use App\GoalTracking;

class GoalTrackingController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  public function deleteGoalTracking() {
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $data = \Request::json()->all();
    $user->goalTrackings()
            ->where('year', '=', $data['year'])
            ->first()->delete();
  }

  public function saveGoalTracking() {
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $data = \Request::json()->all();
    $goalTracking = $user
            ->goalTrackings()
            ->where('year', '=', 0)
            ->first();

    if ($goalTracking != null) {
      $colData = [$data['dbColName'] => $data['value']];
      $month = $goalTracking
              ->monthlyGoalTrackings()
              ->where('month', '=', $data['month'])
              ->first();
      $month->saveModel($colData);
    } else {
      $goalTracking = GoalTracking::create(['year' => 0]);
      $goalTracking->build();
      $user->goalTrackings()->save($goalTracking);
    }
  }

}
