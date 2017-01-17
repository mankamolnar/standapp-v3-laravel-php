<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraStocks extends Model
{
    protected $table = "extra_stocks";

    public function pub_holds() {
        return $this->belongsTo("App\Pub");
    }
}
