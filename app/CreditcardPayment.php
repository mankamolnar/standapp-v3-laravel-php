<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreditcardPayment extends Model
{
    protected $table = "creditcard_payment";

    public function stock_contains() {
        return $this->belongsTo('App\StockHeader');
    }
}
