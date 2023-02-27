<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'description',
        'n_of_people',
        'n_of_places',
        'num_of_days',
        
    ];

    
}
