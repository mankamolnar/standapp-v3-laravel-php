<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{
    protected $table = "tip";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }
}
