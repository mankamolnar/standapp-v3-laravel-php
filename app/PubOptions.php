<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PubOptions extends Model
{
    protected $table = "pub_options";
    public $attributes;

    public function pub_holds() {
        return $this->belongsTo("App\Pub");
    }
}
