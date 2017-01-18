<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DrinkGroup extends Migration
{

    public function up()
    {
        Schema::create("drink_group", function (Blueprint $table) {
            $table->increments('id');
            $table->string('group')->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('drink_group');
    }
}
