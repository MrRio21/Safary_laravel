<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'hotel_id',


    ];

    public function Order()
    {
        return $this->hasMany(Order::class);
    }

    // public function Room()
    // {
    //     return $this->hasOne(Room::class);
    // }
    public function Hotel()
    {
        return $this->hasMany(Hotel::class );
    }


}
