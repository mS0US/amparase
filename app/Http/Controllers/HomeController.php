<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Landing Page
    |--------------------------------------------------------------------------
    */

    public function landing()
    {
        return view('landPage');
    }

    /*
    |--------------------------------------------------------------------------
    | Home Page
    |--------------------------------------------------------------------------
    */

    public function home()
    {
        return view('homePage');
    }
}