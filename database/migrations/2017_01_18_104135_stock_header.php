<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StockHeader extends Migration
{

    public function up()
    {
        Schema::create('stock_header', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->timestamp('submit_date');
            $table->integer('wtime');
            $table->integer('pub_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->boolean('finished')->default(false);
            $table->boolean('checked')->default(false);

            $table->foreign('pub_id')->references('id')->on('pub');
            $table->foreign('user_id')->references('id')->on('user');
        });
    }

    public function down()
    {
        Schema::dropIfExists('stock_header');
    }
}
