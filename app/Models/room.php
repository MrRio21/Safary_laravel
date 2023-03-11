<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;


    protected $fillable = [
        'price',
        'n_of_available_rooms',
        'type',
        'hotel_id',
        'cover_img',


    ];


    public function Hotel()
    {
        return $this->belongsTo(Hotel::class);

    }
    public function RoomImg()
    {
        return $this->hasMany(RoomImg::class);

    }

    // // public function Order()
    // // {
    // //     return $this->hasMany(Order::class);

    // // }
    // public function BookedRoom()
    // {
    //     return $this->hasMany(BookedRoom::class);

    // }



}
