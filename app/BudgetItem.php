<?php

namespace App;

use App\Utility;
use Illuminate\Database\Eloquent\Model;

class BudgetItem extends Model implements MREAModel {

  protected $fillable = ['name', 'last_year', 'this_year',
      'budget_type', 'item_id'];

  public function budgetModel() {
    return $this->belongsTo(BudgetModel::class);
  }

  public function saveModel($data) {
    $dbcolnames = Utility::getDBColNamesFromFile("BudgetItemsDBColNames");
    $i = 0;
    foreach ($dbcolnames as $dbcolname) {
      $this->fill([$dbcolname => $data[$i++]]);
    }
    $this->save();
  }

}
