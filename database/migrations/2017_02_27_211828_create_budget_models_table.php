<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetModelsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('budget_models', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('user_id')->nullable();
      $table->integer('lead_generation_exp')->default(0);
      $table->float('tax')->default(7.0);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('budget_models');
  }

}
