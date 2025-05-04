<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('pages.signup');
    }

    public function login(Request $request)
    {
        // Validate and authenticate the user
        // Redirect to dashboard or show error
    }
}