<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlyGoalTrackingsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('monthly_goal_trackings', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('month');
      $table->integer('goal_tracking_id')->nullable();
      $table->integer('seller_leads')->default(0);
      $table->integer('seller_contacts')->default(0);
      $table->integer('seller_appointments')->default(0);
      $table->integer('buyer_leads')->default(0);
      $table->integer('buyer_contacts')->default(0);
      $table->integer('buyer_appointments')->default(0);
      $table->integer('seller_listings')->default(0);
      $table->integer('buyer_listings')->default(0);
      $table->integer('seller_contracts_written_unit')->default(0);
      $table->integer('buyer_contracts_written_unit')->default(0);
      $table->integer('seller_contracts_written_volume')->default(0);
      $table->integer('buyer_contracts_written_volume')->default(0);
      $table->integer('seller_contracts_written_gci')->default(0);
      $table->integer('buyer_contracts_written_gci')->default(0);
      $table->integer('seller_contracts_closed_unit')->default(0);
      $table->integer('buyer_contracts_closed_unit')->default(0);
      $table->integer('seller_contracts_closed_volume')->default(0);
      $table->integer('buyer_contracts_closed_volume')->default(0);
      $table->integer('seller_contracts_closed_gci')->default(0);
      $table->integer('buyer_contracts_closed_gci')->default(0);
      $table->integer('cost_of_sales')->default(0);
      $table->integer('operating_expenses')->default(0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('monthly_goal_trackings');
  }

}
