<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiscountedDrink extends Migration
{

    public function up()
    {
        Schema::create('discounted_drink', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('drink_id')->unsigned();
            $table->integer('pub_id')->unsigned();
            $table->date('discounted_day');
            $table->boolean('is_repeating');
            $table->integer('price');
            $table->boolean('activated');

            $table->foreign('drink_id')->references('id')->on('drinks');
            $table->foreign('pub_id')->references('id')->on('pub');
        });
    }

    public function down()
    {
        Schema::dropIfExists('discounted_drink');
    }
}
