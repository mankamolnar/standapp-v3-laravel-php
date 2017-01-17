<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drinks extends Model
{
    protected $table = "drinks";

    public function pub_holds() {
        return $this->belongsTo("App\Pub");
    }

    public function group() {
        return $this->belongsTo("App\DrinkGroup");
    }

}
