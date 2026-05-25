<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'id_donations',
        'payment_method',
        'transaction_code',
        'status'
    ];

    public function donation()
    {
        return $this->belongsTo(Donation::class, 'id_donations');
    }
}