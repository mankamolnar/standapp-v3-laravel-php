<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User2pub extends Migration
{

    public function up()
    {
        Schema::create('user2pub', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('pub_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('pub_id')->references('id')->on('pub');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user2pub');
    }
}
