<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeekly411sTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('weekly411s', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('monthly411_id')->nullable();
      $table->integer('week')->default(0);
      $table->integer('leads')->default(0);
      $table->integer('bs_listing_apts')->default(0);
      $table->integer('bs_listings')->default(0);
      $table->integer('met_contacts')->default(0);
      $table->integer('not_met_contacts')->default(0);
      $table->string('desc')->default("");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('weekly411s');
  }

}
