<?php

namespace App\Http\Controllers;

use App\TeamAssumption;
use Auth;
use Illuminate\Http\Request;

class TeamAssumptionController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  public function deleteAgent() {
    $data = \Request::json()->all();
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    TeamAssumption::getAgent($user->id, $data['agent_id'])->delete();
  }

  public function saveAgent() {
    $data = \Request::json()->all();
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $agentid = $data[9];
    $agent = TeamAssumption::getAgent($user->id, $agentid);

    if ($agent != null) {
      $user->teamAssumptions()->find($agent->id)->saveModel($data);
    } else {
      $agent = TeamAssumption::create();
      $user->teamAssumptions()->save($agent);
      $agent->saveModel($data);
    }
  }

}
