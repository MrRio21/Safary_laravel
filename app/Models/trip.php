<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    
    protected $fillable =[
        'description',
        'n_of_people',
        'n_of_places',
        'num_of_days',
        
    ];
       
    public function Place()
    {
        return $this->hasMany(Place::class , 'PlacesOfRecommTrips', 'trip_id', 'trip_id');
    }
    public function User(){
        return $this->hasMany(User::class  , 'ChosenTrip', 'order_id', 'room_id');
    }
}
