<?php

namespace App\Models;

use App\Models\Hotel as ModelsHotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';

    protected $fillable = [
        'name',
        'address',
        'type',
        'hotel_owner_id',
        'cover_img'
        // 'headerImg'
    ];


    public function Rooms()
    {
        return $this->hasMany(Room::class);
    }
    public function BookedRoom()
    {
        return $this->belongsToMany(bookedRoom::class);
    }
    public function HotelOwner()
    {
        return $this->belongsTo(HotelOwner::class);
    }
    public function HotelImg()
    {
        return $this->hasMany(HotelImg::class);

    }
        public function Order()
    {
        return $this->hasMany(Order::class);

    }


}
