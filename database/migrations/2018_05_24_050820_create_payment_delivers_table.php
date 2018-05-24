<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentDeliversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_delivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id');
            $table->integer('buyer_id');
            $table->string('buyer_act');
            $table->integer('seller_id');
            $table->string('seller_act');
            $table->integer('amount');
            $table->timestamp('deliver_date');
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
        Schema::dropIfExists('payment_delivers');
    }
}
