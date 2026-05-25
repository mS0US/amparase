<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';

    protected $fillable = [
        'title',
        'description',
        'goal',
        'image',
        'status'
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class, 'id_projects');
    }
}