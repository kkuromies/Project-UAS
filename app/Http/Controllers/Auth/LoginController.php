<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function showLoginForm()
    {
        return view('login'); // Make sure this view exists
    }

    // Other authentication methods can be added here
}
