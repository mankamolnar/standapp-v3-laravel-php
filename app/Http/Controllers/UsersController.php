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
        $users = User::all();

        return view('users', array(
            "CSS" => $this->CSS, 
            "UIelements" => $this->UIelements, 
            "users" => $users,
        ));
        
    }
}
