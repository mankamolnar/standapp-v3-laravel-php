<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OtherProducts extends Migration
{

    public function up()
    {
        Schema::create("other_products", function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_name_id')->unsigned();
            $table->integer('stock_id')->unsigned();
            $table->integer('yield');

            $table->foreign('product_name_id')->references('id')->on('pub_options');
            $table->foreign('stock_id')->references('id')->on('stock_header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('other_products');
    }
}
