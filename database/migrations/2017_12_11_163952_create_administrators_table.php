<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('other_name');
            $table->string('phone');
            $table->string('email');
            $table->string('State_of_origin');
            $table->string('LGA');
            $table->string('town');
            $table->string('state_of_resident');
            $table->string('city');
            $table->string('address');
            $table->string('password');
            $table->string('depatment');
            $table->string('level');
            $table->string('image');
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
        Schema::dropIfExists('administrators');
    }
}
