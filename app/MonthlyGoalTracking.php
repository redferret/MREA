<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonthlyGoalTracking extends Model implements MREAModel {

  protected $fillable = ['month', 'seller_leads',
      'seller_contacts',
      'seller_appointments',
      'buyer_leads',
      'buyer_contacts',
      'buyer_appointments',
      'seller_listings',
      'buyer_listings',
      'seller_contracts_written_unit',
      'buyer_contracts_written_unit',
      'seller_contracts_written_volume',
      'buyer_contracts_written_volume',
      'seller_contracts_written_gci',
      'buyer_contracts_written_gci',
      'seller_contracts_closed_unit',
      'buyer_contracts_closed_unit',
      'seller_contracts_closed_volume',
      'buyer_contracts_closed_volume',
      'seller_contracts_closed_gci',
      'buyer_contracts_closed_gci',
      'cost_of_sales',
      'operating_expenses'];

  public function goalTracking() {
    return $this->belongsTo(GoalTracking::class);
  }

  public function saveModel($data) {
    $this->fill($data);
    $this->save();
  }

}
