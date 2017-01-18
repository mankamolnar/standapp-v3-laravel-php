<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PubOptions extends Migration
{

    public function up()
    {
        Schema::create('pub_options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pub_id')->unsigned();
            $table->string('option');
            $table->string('value');

            $table->foreign('pub_id')->references('id')->on('pub');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pub_options');
    }
}
