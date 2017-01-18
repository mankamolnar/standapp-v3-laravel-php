<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LotteryYield extends Migration
{

    public function up()
    {
        Schema::create("lottery_yield", function (Blueprint $table) {
            $table->increments('id');
            $table->integer('net_yield');
            $table->integer('all_yield');
            $table->integer('day');
            $table->integer('stock_id')->unsigned();

            $table->foreign('stock_id')->references('id')->on('stock_header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('lottery_yield');
    }
}
