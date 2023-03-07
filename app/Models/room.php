<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

       
    protected $fillable = [
        'price',
        // 'available_rooms',
        'type',
        'hotel_id',
        'cover_img',
        'check_in',
        'check_out',

    ];


    public function Hotel()
    {
        return $this->belongsTo(Hotel::class,$foreignkey ='hotel_id');
        
    }
    public function RoomImg()
    {
        return $this->hasMany(RoomImg::class);
        
    }
    public function Order()
    {
        return $this->hasMany(Order::class);
        
    }


}
