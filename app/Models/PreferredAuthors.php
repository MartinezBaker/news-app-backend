<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferredAuthors extends Model
{
    use HasFactory;

    protected $table = 'preferred_authors';
    
    protected $fillable = [
        'authors_name',
    ];
}

