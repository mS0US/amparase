<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Donation extends Model
{
    use HasFactory;

    protected $table = 'donations';

    protected $fillable = [
        'id_users',
        'id_projects',
        'value',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_users');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'id_projects');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'id_donations');
    }
}