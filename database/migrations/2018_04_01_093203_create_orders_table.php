<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bayers_id');
            $table->integer('seller_id');
            $table->integer('product_id');
            $table->string('add_on');
            $table->integer('amount');
            $table->string('status');
            $table->string('order_id');
            $table->string('add_1');
            $table->string('add_2');
            $table->string('add_3');
            $table->string('add_4');
            $table->string('add_5');
            $table->timestamp('delivery_date');
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
        Schema::dropIfExists('orders');
    }
}
