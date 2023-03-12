<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedRoom extends Model
{
    protected $table= 'booked_rooms';
    use HasFactory;

    protected $fillable = [
        'order_id',
        'hotel_id',
        'room_id',


    ];

    public function Order()
    {
        return $this->belongsToMany(Order::class);
    }

    // public function Room()
    // {
    //     return $this->hasOne(Room::class);
    // }
    public function Hotel()
    {
        return $this->belongsToMany(Hotel::class );
    }


}
