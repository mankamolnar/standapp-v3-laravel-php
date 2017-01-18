<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StockRow extends Migration
{
    public function up()
    {
        Schema::create('stock_row', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('opened_with', 8, 2);
            $table->float('bought', 8, 2);
            $table->float('closed_with', 8, 2);
            $table->integer('yield');
            $table->integer('price');
            $table->integer('stock_id')->unsigned();
            $table->integer('drink_id')->unsigned();

            $table->foreign('stock_id')->references('id')->on('stock_header');
            $table->foreign('drink_id')->references('id')->on('drinks');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_row');
    }
}
