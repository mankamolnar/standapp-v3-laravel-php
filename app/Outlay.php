<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlay extends Model
{
        protected $table = "outlay";

        public function stock_contains() {
                return $this->belongsTo("App\StockHeader");
        }
}
