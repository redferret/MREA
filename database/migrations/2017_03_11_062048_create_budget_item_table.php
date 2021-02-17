<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBudgetItemTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('budget_items', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('budget_model_id')->nullable();
      $table->string('name')->default("");
      $table->integer('last_year')->default(0);
      $table->integer('this_year')->default(0);
      $table->integer('budget_type')->nullable();
      $table->integer('item_id')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('budget_items');
  }

}
