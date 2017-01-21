<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __construct() {}

    public function logout(Request $request) {
        $request->session()->pull('current_pub');
        Auth::logout();
        return redirect('/');
    }
}
