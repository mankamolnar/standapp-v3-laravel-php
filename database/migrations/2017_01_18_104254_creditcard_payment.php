<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreditcardPayment extends Migration
{

    public function up()
    {
        Schema::create("creditcard_payment", function (Blueprint $table) {
            $table->increments("id");
            $table->integer('stock_id')->unsigned();
            $table->integer('spent');

            $table->foreign('stock_id')->references('id')->on('stock_header');
        });
    }

    public function down()
    {
        Schema::dropIfExists('creditcard_payment');
    }
}
