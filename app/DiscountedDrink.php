<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscountedDrink extends Model
{
    protected $table = "discounted_drink";

    public function drink() {
        return $this->belongsTo('App\Drinks');
    }

    public function pub_holds() {
        return $this->belongsTo('App\Pub');
    }
}
