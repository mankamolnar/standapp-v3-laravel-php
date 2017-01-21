<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CSSloader;
use App\UIelements;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
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

        if (session('current_pub') !== null) {
            return view('index', array("CSS" => $this->CSS, "UIelements" => $this->UIelements));

        } else {
            return app('App\Http\Controllers\ChoosePubController')->index();

        }
        
    }
}
