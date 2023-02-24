<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
       
    ];

    public function customizePlaces()
    {
        return $this->belongsTo(customizePlaces::class);
    }
}
