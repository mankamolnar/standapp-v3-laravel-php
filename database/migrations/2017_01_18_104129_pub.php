<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pub extends Migration
{
    public function up()
    {
        Schema::create('pub', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('daily_fee')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pub');
    }
}
