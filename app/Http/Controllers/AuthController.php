<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login
    |--------------------------------------------------------------------------
    */

    public function login()
    {
        return view('login');
    }

    /*
    |--------------------------------------------------------------------------
    | Cadastro
    |--------------------------------------------------------------------------
    */

    public function signup()
    {
        return view('signup');
    }
}