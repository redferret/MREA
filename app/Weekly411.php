<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekly411 extends Model implements MREAModel {

  protected $fillable = ['week', 'leads', 'bs_listing_apts', 'bs_listings',
      'met_contacts', 'not_met_contacts', 'desc'];

  public function monthly411() {
    return $this->belongsTo(Monthly411::class);
  }

  public function saveModel($data) {
    $this->fill($data);
    $this->save();
  }

}
