<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "user";
    protected $fillable = ['name', 'email', 'password',];
    protected $hidden = ['password', 'remember_token',];
    protected $current_pub = false;

    public function properties() {
        return $this->hasMany('App\UserProperties');
    }

    public function accessable_pubs() {
        return $this->hasMany('App\User2Pub');
    }

    public function check_current_pub() {
        return $current_pub;
    }

    public function update_current_pub() {
        return True;
    }

    public function generate_menu() {
        
    }
}
