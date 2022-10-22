<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class AuthLoginController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */

    public function dashboard() {
        return view('login.dashboard');
    }
}
