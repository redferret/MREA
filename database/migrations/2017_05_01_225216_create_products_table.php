<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Products;

class CreateProductsTable extends Migration {

  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up() {
    Schema::create('products', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name')->default("");
      $table->integer('productId')->nullable()->unique();
      $table->integer('account_type');
      $table->float('price')->default(0);
      $table->timestamps();
    });

    Products::create(['name' => 'MREA Business Plan - Solo Real Estate Agent',
        'price' => 59.95,
        'productId' => 1,
        'account_type' => 1]);
    Products::create(['name' => 'MREA Business Plan - Team/Group',
        'price' => 79.95,
        'productId' => 5,
        'account_type' => 2]);
    Products::create(['name' => 'MREA Business Plan - Solo Agent Implementation',
        'price' => 250,
        'productId' => 3,
        'account_type' => 1]);
    Products::create(['name' => 'MREA Business Plan - Team/Group Implementation',
        'price' => 300,
        'productId' => 4,
        'account_type' => 2]);
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('products');
  }

}
