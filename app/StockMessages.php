<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockMessages extends Model
{
    protected $table = "stock_messages";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }
}
