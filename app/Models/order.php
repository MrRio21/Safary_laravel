<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'budget',
        'check_in',
        'check_out',
    ];


    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function placesOfRecommTrips()
    {
        return $this->belongsTo(placesOfRecommTrips::class);
    }
}
