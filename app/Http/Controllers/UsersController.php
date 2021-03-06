<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\UIelements;
use App\CSSloader;

class UsersController extends Controller
{
    public $UIelements;
    public $CSS;

    public function __construct()
    {
        $this->middleware('auth');
        $this->UIelements = new UIelements();
        $this->CSS = new CSSloader();
    }

    public function index()
    {
        $users = User::users_of_accessable_pubs();
        $json_for_connect_table = User::accessable_pubs_to_json_array();

        return view('users', array(
            "CSS" => $this->CSS, 
            "UIelements" => $this->UIelements, 
            "users" => $users,
            'json_for_connect_table' => $json_for_connect_table
        ));
        
    }
}
