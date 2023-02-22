<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacesOfRecommTrips extends Model
{
    use HasFactory;


    public function order()
    {
        return $this->hasMany(order::class);
    }


}
