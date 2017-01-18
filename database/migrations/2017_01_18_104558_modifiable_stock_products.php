<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifiableStockProducts extends Migration
{

    public function up()
    {
        Schema::create("modifiable_stock_products", function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('opened_with', 8, 2);
            $table->float('bought', 8, 2);
            $table->float('closed_with', 8, 2);
            $table->integer('price');
            $table->boolean('visible');
            $table->integer('stock_id')->unsigned();

            $table->foreign('stock_id')->references('id')->on('stock_header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('modifiable_stock_products');
    }
}
