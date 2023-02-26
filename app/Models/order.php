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
        'check_in_d',
        'check_in_m',
        'check_in_y',
        'check_out_d',
        'check_out_m',
        'check_out_y',
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
