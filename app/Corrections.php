<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corrections extends Model
{
    protected $table = "corrections";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }

    public function on_drink() {
        return $this->belongsTo("App\Drinks");
    }

    public function on_user() {
        return $this->belongsTo("App\User");
    }

}
