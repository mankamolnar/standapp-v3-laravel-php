<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherProducts extends Model
{
    protected $table = "other_products";

    public function name() {
        return $this->belongsTo("App\PubOptions");
    }

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }
}
