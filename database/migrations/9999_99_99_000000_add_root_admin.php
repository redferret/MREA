<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\User;

class AddRootAdmin extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    $user = User::build(['name' => 'Root Admin',
                'email' => 'webmaster@mreabusinessplan.com',
                'password' => 'rootAdmin']);
    $user->account_type = 3;
    $user->save();
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    //
  }

}
