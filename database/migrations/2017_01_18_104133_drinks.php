<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drinks extends Migration
{

    public function up()
    {
        Schema::create("drinks", function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pub_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->integer('number_in_list');
            $table->string('name')->unique();
            $table->integer('price');
            $table->integer('purchase_price');
            $table->boolean('close_stock_bigger');
            $table->boolean('visible');

            $table->foreign('pub_id')->references('id')->on('pub');
            $table->foreign('group_id')->references('id')->on('drink_group');
        });
    }

    public function down()
    {
        Schema::dropIfExists('drinks');
    }
}
