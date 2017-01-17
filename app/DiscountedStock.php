<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscountedStock extends Model
{
    protected $table = "discounted_stock";

    public function options() {
        return $this->belongsTo('App\DiscountedDrink');
    }

    public function drink() {
        return $this->belongsTo('App\Drinks');
    }

    public function stock_contains() {
        return $this->belongsTo('App\StockHeader');
    }


}
