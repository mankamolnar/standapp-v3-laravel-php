<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use App\Pub;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "user";
    protected $fillable = ['name', 'email', 'password',];
    protected $hidden = ['password', 'remember_token',];
    public $current_pub = false;
    public $attributes;

    public function properties() {
        return $this->hasMany('App\UserProperties');
    }

    public function accessable_pubs() {
        return $this->hasMany('App\User2Pub');
    }

    public static function _accessable_pubs() {
        $user = Auth::user();
        //var_dump($user->accessable_pubs);
        $accessable_pubs = array();

        foreach ($user->accessable_pubs as $pub) {
            $accessable_pubs[] = $pub;
        }
        return $accessable_pubs;
    }


}
