<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProperties extends Model
{
    protected $table = "user_properties";

    public function user() {
        return $this->belongsTo("App\User");
    }
}
