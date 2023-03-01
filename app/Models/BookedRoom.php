<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'room_id',
        'n_of_rooms',
    ];

    public function order()
    {
        return $this->hasMany(Order::class);
    }
    
    public function room()
    {
        return $this->hasMany(Room::class);
    }


}
