<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodYield extends Model
{
    protected $table = "food_yield";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }
}
