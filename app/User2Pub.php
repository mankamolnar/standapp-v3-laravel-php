<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User2Pub extends Model
{
    protected $table = "user2pub";

    public function user() {
        return $this->belongsTo("App\User");
    }

    public function pub() {
        return $this->belongsTo("App\Pub");
    }
}
