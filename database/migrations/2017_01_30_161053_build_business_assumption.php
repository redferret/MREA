<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuildBusinessAssumption extends Migration {

  public function up() {
    Schema::create('business_assumptions', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->nullable();
      $table->string('creation_date')->default("");
      $table->string('company_name')->default("");
      $table->integer('working_weeks')->default(52);
      $table->integer('forecasted_net_income_1year')->default(0);
      $table->integer('forecasted_net_income_3year')->default(0);
      $table->integer('forecasted_net_income_someday')->default(0);
      $table->float('revenue_from_sellers')->default(0);

      $table->timestamps();
    });

    Schema::table('business_assumptions', function($table) {
      $table->float('seller_listing_commission_percent')->default(0);
      $table->integer('seller_listing_price')->default(0);
      $table->float('seller_leads_to_contact_rate')->default(0);
      $table->float('seller_contact_to_listing_appointment_rate')->default(0);
      $table->float('seller_listing_appointment_to_listing_rate')->default(0);
      $table->float('seller_listing_to_contract_rate')->default(0);
      $table->float('seller_contract_to_close_rate')->default(0);
    });

    Schema::table('business_assumptions', function($table) {
      $table->float('buyer_listing_commission_percent')->default(0);
      $table->integer('buyer_listing_price')->default(0);
      $table->float('buyer_leads_to_contact_rate')->default(0);
      $table->float('buyer_contact_to_listing_appointment_rate')->default(0);
      $table->float('buyer_listing_appointment_to_listing_rate')->default(0);
      $table->float('buyer_listing_to_contract_rate')->default(0);
      $table->float('buyer_contract_to_close_rate')->default(0);
    });

    Schema::table('business_assumptions', function($table) {
      $table->float('desired_closing_combination_met')->default(1);
      $table->integer('year_for_1year_model')->nullable();
      $table->integer('number_years_someday')->default(5);
    });

    Schema::table('business_assumptions', function($table) {
      $table->integer('Met_database_count')->default(0);
      $table->integer('Met_touches_count')->default(0);
      $table->float('Met_cost_per_touch')->default(0);
      $table->integer('Met_ratio_numerator')->default(0);
      $table->integer('Met_ratio_denominator')->default(0);
      $table->integer('NotMet_database_count')->default(0);
      $table->integer('NotMet_touches_count')->default(0);
      $table->float('NotMet_cost_per_touch')->default(0);
      $table->integer('NotMet_ratio_numerator')->default(0);
      $table->integer('NotMet_ratio_denominator')->default(0);
    });
  }

  /**
   * Reverse the migrations of the business_assumption_id
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('business_assumptions');
  }

}
