<?php


namespace App\Http\Controllers;

use App\Models\User;
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
        $user = User::where("email", "=", "joao");
//dd($user);
        return view('login.dashboard');
    }
}
