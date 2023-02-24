<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

       
    protected $fillable = [
        'price',
        'available_rooms',
        'type',
        'hotel_id'
    ];


    public function hotel()
    {
        return $this->belongsTo(Hotel::class,$foreignkey ='hotel_id');
        
    }
    public function roomImg()
    {
        return $this->hasMany(RoomImg::class);
        
    }


}
