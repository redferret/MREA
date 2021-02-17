<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BudgetModel extends Model implements MREAModel {

  protected $fillable = ['lead_generation_exp', 'tax'];

  public function budgetItems() {
    return $this->hasMany(BudgetItem::class);
  }

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function saveModel($data) {
    $this->fill($data);
    $this->save();
  }

  protected static function boot() {
    parent::boot();

    static::deleting(function($model) {
      $model->budgetItems()->get()->each(function($item) {
        $item->delete();
      });
    });
  }

}
