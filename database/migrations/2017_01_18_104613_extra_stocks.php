<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ExtraStocks extends Migration
{

    public function up()
    {
        Schema::create("extra_stocks", function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pub_id')->unsigned();
            $table->string('name')->unique();

            $table->foreign('pub_id')->references('id')->on('pub');
        });
    }

    public function down()
    {
        Schema::dropIfExists('extra_stocks');
    }
}
