<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CSSloader;
use App\Pub;
use App\UIelements;
use App\User;
use Illuminate\Support\Facades\Auth;

class ChoosePubController extends Controller
{

    public $UIelements;
    public $CSS;

    public function __construct() {
        $this->middleware('auth');
        $this->UIelements = new UIelements();
        $this->CSS = new CSSloader();
    }

    public function index() {
        $accessable_pubs = User::_accessable_pubs();

        $to_view = array(
            'accessable_pubs' => $accessable_pubs, 
            'CSS' => $this->CSS, 
            'UIelements' => $this->UIelements,
            'current_pub' => session('current_pub')
        );

        return view('choose_pub', $to_view);
        
    }

    public function change_pub(Request $request) {
        $requests = $request->all();
        session(['current_pub' => $request['pub']]);

        return app('App\Http\Controllers\IndexController')->index();

    }
}
