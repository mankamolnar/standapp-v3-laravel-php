<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockRow extends Model
{
    protected $table = "stock_row";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }

    public function drink() {
        return $this->belongsTo("App\Drinks");
    }
}
