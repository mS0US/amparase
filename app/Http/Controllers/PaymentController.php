<?php

namespace App\Http\Controllers;

use App\Models\Payment;

class PaymentController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Página de Pagamentos
    |--------------------------------------------------------------------------
    */

    public function index()
    {
        $payments = Payment::all();

        return view('payment', compact('payments'));
    }
}