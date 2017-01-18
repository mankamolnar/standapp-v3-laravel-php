<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class User extends Migration
{

    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('password');
            $table->integer('tether');
            $table->boolean('active')->default(true);
            $table->rememberToken();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}
