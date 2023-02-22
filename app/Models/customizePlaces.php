<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customizePlaces extends Model
{
    use HasFactory;


    public function place(): HasMany
    {
        return $this->hasMany(place::class);
    }
}
