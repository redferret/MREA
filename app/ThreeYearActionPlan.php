<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThreeYearActionPlan extends Model implements MREAModel {

  protected $fillable = ['goals'];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function saveModel($data) {
    $this->fill($data);
    $this->save();
  }

}
