<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User2version extends Migration
{

    public function up()
    {
        Schema::create('user2version', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('version_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('version_id')->references('id')->on('version');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user2version');
    }
}
