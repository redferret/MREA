<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthly411sTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('monthly411s', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('annual411_id')->nullable();
      $table->integer('month')->default(0);
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
    Schema::dropIfExists('monthly411s');
  }

}
