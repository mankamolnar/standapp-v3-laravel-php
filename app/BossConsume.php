<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BossConsume extends Model
{
    protected $table = "boss_consume";

    public function stock_contains() {
        return $this->belongsTo("App\StockHeader");
    }

    public function boss() {
        return $this->belongsTo('App\PubOptions');
    }
}
