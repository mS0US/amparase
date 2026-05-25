<?php

namespace App\Http\Controllers;

use App\Models\Donation;

class DonationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Página de Doações
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $donations = Donation::all();

        return view('donation', compact('donations'));
    }
}