<?php

namespace App\Http\Controllers;

use Auth;

class Annual411Controller extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  public function saveMonthly411() {
    $data = \Request::json()->all();
    $colData = [$data['dbColName'] => $data['value']];
    $year = $data['year'];
    $month = $data['month'];
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $user->annual411()
            ->where('year', '=', $year)
            ->first()
            ->monthly411()
            ->where('month', '=', $month)->first()
            ->saveModel($colData);
  }

  public function saveAnnual411() {
    $data = \Request::json()->all();
    $colData = [$data['dbColName'] => $data['value']];
    $year = $data['year'];
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $user->annual411()->where('year', '=', $year)->first()
            ->saveModel($colData);
  }

  public function saveWeekly411() {
    $data = \Request::json()->all();
    $colData = [$data['dbColName'] => $data['value']];
    $year = $data['year'];
    $month = $data['month'];
    $week = $data['week'];
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $user->annual411()
            ->where('year', '=', $year)
            ->first()
            ->monthly411()
            ->where('month', '=', $month)->first()
            ->weekly411()
            ->where('week', '=', $week)->first()
            ->saveModel($colData);
  }

  public function deleteAnnual411() {
    $annual411Year = \Request::json()->input('year');
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $user->annual411()->where('year', '=', $annual411Year)->first()->delete();
  }

  public function newAnnual411() {
    $year = \Request::json()->input('year');
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $annual411 = \Annual411::create(['year' => $year]);
    $annual411->build();
    $user->annual411()->save($annual411);
    $user->save();
  }

}
