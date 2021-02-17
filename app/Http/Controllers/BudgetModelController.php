<?php

namespace App\Http\Controllers;

use App\BudgetItem;
use Auth;
use Illuminate\Http\Request;

class BudgetModelController extends Controller {

  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct() {
    $this->middleware('auth');
  }

  public function deleteBudgetItem() {
    $data = \Request::json()->all();
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $user->budgetModel->budgetItems()
            ->where('item_id', '=', $data['item_id'])->first()->delete();
  }

  public function saveBudgetItem() {
    $data = \Request::json()->all();
    $user = Auth::user();
    if ($user->shadowedUser != null) {
      $user = $user->shadowedUser;
    }
    $itemid = $data[4];

    $budgetItem = $user->budgetModel->budgetItems()
                    ->where('item_id', '=', $itemid)->first();

    if ($budgetItem == null) {
      $budgetItem = BudgetItem::create(['item_id' => $itemid]);
      $user->budgetModel->budgetItems()->save($budgetItem);
    }
    $user->budgetModel->budgetItems()
            ->where('item_id', '=', $itemid)->first()
            ->saveModel($data);
  }

}
