<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtraBoughts extends Migration
{
    public function up()
    {
        Schema::create('extra_boughts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('drink_id')->unsigned();
            $table->integer('stock_id')->unsigned();
            $table->float('value');

            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('stock_id')->references('id')->on('stock_header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('extra_boughts');
    }
}
