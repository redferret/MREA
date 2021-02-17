<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamAssumptionsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('team_assumptions', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->nullable();
      $table->string('agent_name')->default("");
      $table->integer('team_listings')->default(0);
      $table->integer('team_sales')->default(0);
      $table->integer('personal_listings')->default(0);
      $table->integer('personal_sales')->default(0);
      $table->float('split')->default(29.2);
      $table->float('percent_of_total_sales')->default(100);
      $table->integer('gross_commission_income')->default(0);
      $table->integer('net_commission_income')->default(0);
      $table->integer('agent_id')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('team_assumptions');
  }

}
