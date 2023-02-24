<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceImg extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'place_id',
       
    ];

    public function place()
    {
        return $this->belongsTo(place::class);
    }
    
}
