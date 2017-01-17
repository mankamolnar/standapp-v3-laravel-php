<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraStockValues extends Model
{
    protected $table = "extra_stock_values";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }

    public function drink() {
        return $this->belongsTo("App\Drinks");
    }

    public function in_stock() {
        return $this->belongsTo("App\ExtraStock");
    }
}
