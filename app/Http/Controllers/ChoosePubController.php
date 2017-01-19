<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\CSSloader;
use App\Pub;
use Illuminate\Support\Facades\Auth;

class ChoosePubController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $CSS = new CSSloader();
        $user = Auth::user();
        $accessable_pubs = array();

        foreach ($user->accessable_pubs as $pub) {
            $accessable_pubs[] = $pub;
        }

        return view('choose_pub', array('accessable_pubs' => $accessable_pubs, 'CSS' => $CSS));
        
    }
}
