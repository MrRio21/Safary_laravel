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
        // 'headerImg'
    ];


    public function room()
    {
        return $this->hasMany(Room::class);
    }
    public function bookedRoom()
    {
        return $this->hasMany(bookedRoom::class);
    }
    public function hotelOwner()
    {
        return $this->belongsTo(HotelOwner::class);
    }
    public function hotelImg()
    {
        return $this->belongsTo(Hotel::class);

    }

}
