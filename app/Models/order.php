<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;

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

    // 'check_in_m',
    // 'check_in_y',
    // 'check_out_d',
    // 'check_out_m',
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function PlacesOfRecommTrips()
    {
        return $this->belongsTo(placesOfRecommTrips::class);
    }
    public function Room()
    {
        return $this->hasMany(Room::class , 'booked_rooms', 'order_id', 'room_id')->withPivot('n_of_rooms');
    }
    public function Tourguide()
    {
        return $this->belongsTo(Tourguide::class , 'book_tour_guide', 'order_id', 'tourGuide_id');
    }

}
