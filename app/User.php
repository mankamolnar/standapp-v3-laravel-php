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
        $accessable_pubs = array();

        foreach ($user->accessable_pubs as $pub) {
            $accessable_pubs[] = $pub;
        }
        return $accessable_pubs;
    }

    public static function accessable_pubs_to_json_array() {
        $json_array = "[";
        $pubs = User::_accessable_pubs();

        foreach ($pubs as $pub) {
            $json_array .= '{"ID": "'.$pub->pub->id.'", "name": "'.$pub->pub->name.'"}, ';
        }
        $json_array = substr($json_array, 0, -2);
        $json_array .= "]";

        return $json_array;
    }

    public static function accessable_pubs_ids() {
        $accessable_pubs_ids = [];
        $accessable_pubs = User::_accessable_pubs();
        foreach ($accessable_pubs as $pub) {
            $accessable_pubs_ids[] = $pub->id;
        }
        return $accessable_pubs_ids;
    }

    public static function users_of_accessable_pubs() {
        $users = User2Pub::distinct()->select('user_id')->whereIn('user_id', User::accessable_pubs_ids())->get();
        return $users;
    }


}
