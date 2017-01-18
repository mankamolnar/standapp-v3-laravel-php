<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiscountedStock extends Migration
{

    public function up()
    {
        Schema::create('discounted_stock', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('discounted_drink_id')->unsigned();
            $table->integer('drink_id')->unsigned();
            $table->integer('stock_id')->unsigned();
            $table->integer('price');
            $table->float('yield', 8, 2);

            $table->foreign('discounted_drink_id')->references('id')->on('discounted_drink');
            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('stock_id')->references('id')->on('stock_header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('discounted_stock');
    }
}
