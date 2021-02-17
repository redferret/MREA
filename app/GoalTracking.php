<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GoalTracking extends Model implements MREAModel {

  protected $fillable = ['year'];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function monthlyGoalTrackings() {
    return $this->hasMany(MonthlyGoalTracking::class);
  }

  public function build() {
    for ($i = 0; $i < 12; $i++) {
      $this->monthlyGoalTrackings()
              ->save(MonthlyGoalTracking::create(['month' => $i]));
    }
  }

  public function saveModel($data) {
    $this->fill($data);
    $this->save();
  }

  protected static function boot() {
    parent::boot();
    static::deleting(function($model) {
      foreach ($model->monthlyGoalTrackings as $monthlyGoalTracking) {
        $monthlyGoalTracking->delete();
      }
    });
  }

}
