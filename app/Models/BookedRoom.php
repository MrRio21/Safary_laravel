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
        // 'check_in',
        // 'check_out'
        // 'price'
    ];

    public function Order()
    {
        return $this->hasMany(Order::class);
    }
    
    public function Room()
    {
        return $this->hasMany(Room::class);
    }


}
