<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LotteryOutlay extends Model
{
    protected $table = "lottery_outlay";

    public function pub_holds() {
        return $this->belongsTo("App\Pub");
    }

    public function on_drink() {
        return $this->belongsTo("App\Drinks");
    }

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }
}
