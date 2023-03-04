<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImg extends Model
{
    protected $table='room_imgs';
    use HasFactory;

    protected $fillable = [
        'image',
        'room_id',
       
    ];

    public function Room(){
        return $this->belongsTo(Room::class);
    }
}
