<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusinessAssumption extends Model implements MREAModel {

  protected $fillable = ['creation_date', 'company_name', 'working_weeks',
      'forecasted_net_income_1year', 'forecasted_net_income_3year',
      'forecasted_net_income_someday', 'revenue_from_sellers',
      'buyer_listing_commission_percent', 'buyer_listing_price',
      'buyer_leads_to_contact_rate',
      'buyer_contact_to_listing_appointment_rate',
      'buyer_listing_appointment_to_listing_rate',
      'buyer_listing_to_contract_rate', 'buyer_contract_to_close_rate',
      'seller_listing_commission_percent', 'seller_listing_price',
      'seller_leads_to_contact_rate',
      'seller_contact_to_listing_appointment_rate',
      'seller_listing_appointment_to_listing_rate',
      'seller_listing_to_contract_rate', 'seller_contract_to_close_rate',
      'Met_database_count', 'Met_touches_count', 'Met_cost_per_touch',
      'Met_ratio_numerator', 'Met_ratio_denominator', 'NotMet_database_count',
      'NotMet_touches_count', 'NotMet_cost_per_touch', 'NotMet_ratio_numerator',
      'NotMet_ratio_denominator', 'desired_closing_combination_met',
      'year_for_1year_model', 'number_years_someday'];

  public function saveModel($data) {
    $this->fill($data);
    $this->save();
  }

  public function user() {
    return $this->belongsTo(User::class);
  }

}
