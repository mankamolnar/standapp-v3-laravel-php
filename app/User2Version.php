<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User2Version extends Model
{
    protected $table = "user2version";

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function version() {
        return $this->belongsTo('App\Version');
    }
}
