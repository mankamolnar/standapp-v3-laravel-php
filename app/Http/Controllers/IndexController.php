<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CSSloader;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CSS = new CSSloader();
        $user = Auth::user();
        if ($user->current_pub != false) {
            return view('index', array("CSS" => $CSS));

        } else {
            return app('App\Http\Controllers\ChoosePubController')->index();

        }
        
    }
}
