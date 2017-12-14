<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_name');
            $table->string('description');
            $table->string('amount');
            $table->string('rating');
            $table->string('image');
            $table->string('user_id');
            $table->string('cat');
            $table->string('sub_cat');
            $table->string('add1');
            $table->string('add2');
            $table->string('add3');
            $table->string('add4');
            $table->string('add5');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
