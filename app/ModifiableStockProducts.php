<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModifiableStockProducts extends Model
{
    protected $table = "modifiable_stock_products";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }
}
