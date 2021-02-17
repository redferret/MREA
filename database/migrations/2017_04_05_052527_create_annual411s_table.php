<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnual411sTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('annual411s', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('year')->default(0);
      $table->integer('user_id')->nullable();
      $table->integer('met_contacts')->default(0);
      $table->integer('not_met_contacts')->default(0);
      $table->integer('leads')->default(0);
      $table->integer('bs_listing_apts')->default(0);
      $table->integer('bs_listings')->default(0);
      $table->integer('contracts_written')->default(0);
      $table->integer('contracts_closed')->default(0);
      $table->integer('total_gci')->default(0);
      $table->string('people')->default("");
      $table->string('system_tools')->default("");
      $table->string('education')->default("");
      $table->string('job')->default("");
      $table->string('personal_finance')->default("");
      $table->string('personal')->default("");
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('annual411s');
  }

}
