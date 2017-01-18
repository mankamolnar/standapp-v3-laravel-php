<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tip extends Migration
{

    public function up()
    {
        Schema::create("tip", function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stock_id')->unsigned();
            $table->integer('yield');

            $table->foreign('stock_id')->references('id')->on('stock_header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('tip');
    }
}
