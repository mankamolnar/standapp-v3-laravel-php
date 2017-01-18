<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Outlay extends Migration
{

    public function up()
    {
        Schema::create("outlay", function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->integer('stock_id')->unsigned();

            $table->foreign('stock_id')->references('id')->on('stock_header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('outlay');
    }
}
