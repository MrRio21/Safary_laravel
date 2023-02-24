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
        'n_of_adults',
        'n_of_childeren',
        'n_of_rooms',
    ];


    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function placesOfRecommTrips()
    {
        return $this->belongsTo(placesOfRecommTrips::class);
    }
    public function room()
    {
        return $this->hasMany(Room::class);
    }

}
