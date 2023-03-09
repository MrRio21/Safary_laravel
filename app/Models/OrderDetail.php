<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'room_status',
        'tourguide_status',
        'price_paid',
    ];

    public function Order()
    {
        return $this->hasMany(Order::class);
    }


}
