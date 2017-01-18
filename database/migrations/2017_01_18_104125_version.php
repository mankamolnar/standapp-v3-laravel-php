<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Version extends Migration
{

    public function up()
    {
        Schema::create('version', function (Blueprint $table) {
            $table->increments('id');
            $table->string('version')->unique();
            $table->boolean('update_0')->nullable();
            $table->boolean('update_1')->nullable();
            $table->boolean('update_2')->nullable();
            $table->boolean('update_3')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('version');
    }
}
