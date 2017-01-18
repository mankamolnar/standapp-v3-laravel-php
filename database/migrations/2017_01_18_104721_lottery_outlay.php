<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LotteryOutlay extends Migration
{
    public function up()
    {
        Schema::create('lottery_outlay', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pub_id')->unsigned();
            $table->integer('drink_id')->unsigned();
            $table->integer('stock_id')->unsigned();
            $table->integer('outcome');

            $table->foreign('pub_id')->references('id')->on('pub');
            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('stock_id')->references('id')->on('stock_header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lottery_outlay');
    }
}
