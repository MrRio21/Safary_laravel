<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'budget',
        'check_in',
        'check_out',
        'n_of_adults',
        'n_of_childeren',
        'n_of_days'
    ];


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
    public function Places()
    {
        return $this->hasMany(Place::class , 'ordered_places', 'order_id', 'places_id');
    }


}
