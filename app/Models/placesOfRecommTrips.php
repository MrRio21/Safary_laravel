<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class placesOfRecommTrips extends Model
{
    use HasFactory;


    public function order(): HasMany
    {
        return $this->hasMany(order::class);
    }


}
