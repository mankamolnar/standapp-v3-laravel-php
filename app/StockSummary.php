<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockSummary extends Model
{
    protected $table = "stock_summary";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }
}
