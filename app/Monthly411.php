<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monthly411 extends Model implements MREAModel {

  protected $fillable = ['month', 'people', 'system_tools', 'education',
      'job', 'personal_finance', 'personal'];

  public function annual411() {
    return $this->belongsTo(Annual411::class);
  }

  public function weekly411() {
    return $this->hasMany(Weekly411::class);
  }

  public function saveModel($data) {
    $this->fill($data);
    $this->save();
  }

  public function build() {
    for ($i = 0; $i < 4; $i++) {
      $this->weekly411()->save(Weekly411::create(['week' => $i]));
    }
  }

}
