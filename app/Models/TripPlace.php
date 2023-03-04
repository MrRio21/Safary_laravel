<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripPlace extends Model
{
    use HasFactory;
    protected $fillable=[
        'trip_id',
        'place_id'
    ];
    
}
