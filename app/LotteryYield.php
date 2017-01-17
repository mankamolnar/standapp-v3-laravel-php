<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LotteryYield extends Model
{
    protected $table = "lottery_yield";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }
}
