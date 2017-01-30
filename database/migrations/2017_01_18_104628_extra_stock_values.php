<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtraStockValues extends Migration
{
    public function up()
    {
        Schema::create('extra_stock_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('stock_id')->unsigned();
            $table->integer('drink_id')->unsigned();
            $table->integer('extra_stock_id')->unsigned();
            $table->float('opened_with', 8, 2);
            $table->float('closed_with');
            $table->float('yield');
            $table->integer('price');

            $table->foreign('stock_id')->references('id')->on('stock_header');
            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('extra_stock_id')->references('id')->on('extra_stocks');
        });
    }

    public function down()
    {
        Schema::dropIfExists('extra_stock_values');
    }
}
