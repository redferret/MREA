<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsers01 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
      Schema::table('users', function(Blueprint $table) {
        $table->boolean('flagForExpiration')->default(false);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
      Scheme::table('users', function(Blueprint $table) {
        $table->dropColumn('flagForExpiration');
      });
    }
}
