<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    protected $table = "pub";

    public function options() {
        return $this->hasMany("App\PubOptions");
    }

    public function discounted_drinks() {
        return $this->hasMany("App\DiscountedDrink");
    }
}
