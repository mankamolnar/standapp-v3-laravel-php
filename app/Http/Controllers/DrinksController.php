<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UIelements;
use App\CSSloader;
use App\Drinks;

class DrinksController extends Controller
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
        $drinks = Drinks::where('pub_id', session('current_pub'))->get();

        return view('drinks', array(
            "CSS" => $this->CSS, 
            "UIelements" => $this->UIelements, 
            "drinks" => $drinks,
            "current_pub" => session('current_pub')
        ));
        
        
    }

    public function csv_upload() {
        
    }
}
