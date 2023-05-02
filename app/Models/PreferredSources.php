<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PreferredSources extends Model
{
    use HasFactory;

    
    protected $table = 'preferred_sources';
    
    protected $fillable = [
        'authors_name',
    ];
}
