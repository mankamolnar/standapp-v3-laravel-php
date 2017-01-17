<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $table = "version";

    public function users_seen() {
        return $this->hasMany('App\User2Version');
    }
}
