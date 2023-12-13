<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function authLogin()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function authRegister()
    {
        return view('auth.register');
    }
}
