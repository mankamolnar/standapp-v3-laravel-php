<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BossConsume extends Migration
{
    public function up()
    {
        Schema::create("boss_consume", function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stock_id')->unsigned();
            $table->integer('boss_name_id')->unsigned();
            $table->integer('value');

            $table->foreign('stock_id')->references('id')->on('stock_header');
            $table->foreign('boss_name_id')->references('id')->on('pub_options');
        });
    }

    public function down()
    {
        Schema::dropIfExists('boss_consume');
    }
}
