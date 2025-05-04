<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        // Validate and authenticate the user
        // Redirect to dashboard or show error
    }
}