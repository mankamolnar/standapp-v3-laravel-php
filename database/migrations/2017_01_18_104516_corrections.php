<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Corrections extends Migration
{

    public function up()
    {
        Schema::create("corrections", function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stock_id')->unsigned();
            $table->integer('drink_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->date('correction_date');
            $table->integer('value');
            $table->text('message')->nullable();

            $table->foreign('stock_id')->references('id')->on('stock_header');
            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('corrections');
    }
}
