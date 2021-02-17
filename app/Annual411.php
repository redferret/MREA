<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annual411 extends Model implements MREAModel {

  protected $fillable = ['year', 'met_contacts',
      'not_met_contacts', 'leads', 'bs_listing_apts', 'bs_listings',
      'contracts_written', 'contracts_closed', 'total_gci', 'people',
      'system_tools', 'education', 'job', 'personal_finance', 'personal'];

  public function user() {
    return $this->belongsTo(User::class);
  }

  public function monthly411() {
    return $this->hasMany(Monthly411::class);
  }

  public function build() {
    for ($month = 0; $month < 12; $month++) {
      $monthly411 = Monthly411::create(['month' => $month]);
      $monthly411->build();
      $this->monthly411()->save($monthly411);
    }
    $this->save();
  }

  public function saveModel($data) {
    $this->fill($data);
    $this->save();
  }

  protected static function boot() {
    parent::boot();
    static::deleted(function($model) {
      foreach ($model->monthly411 as $monthly411) {
        $monthly411->weekly411()->delete();
      }
      $model->monthly411()->delete();
    });
  }

}
