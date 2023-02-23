<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizePlaces extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->hasMany(users::class);
    }

    public function place()
    {
        return $this->hasMany(place::class);
    }
}
