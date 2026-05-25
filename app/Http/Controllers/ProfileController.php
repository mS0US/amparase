<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Perfil do Usuário
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        return view('profile');
    }
}