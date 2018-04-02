<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGitDraftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('git_drafts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pro_name');
            $table->string('description');
            $table->integer('amount');
            $table->integer('rating');
            $table->string('image');
            $table->integer('user_id');
            $table->integer('cat');
            $table->integer('sub_cat');
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
        Schema::dropIfExists('git_drafts');
    }
}
