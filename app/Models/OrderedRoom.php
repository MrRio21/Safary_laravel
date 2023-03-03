<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedRoom extends Model
{
    use HasFactory;

    protected $fillable = [
      'n_of_room',
      'room_type',
      'order_id'
    ];
    public function Order()
    {
        return $this->hasMany(Order::class);
    }
}
