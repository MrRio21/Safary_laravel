<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedPlaces extends Model
{
    use HasFactory;

    protected $fillable = [
        'place_id',
        'order_id',
       
    ];
}
