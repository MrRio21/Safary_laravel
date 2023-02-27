<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'order_id',
        'room_status',
        'tourGuide_status',
        'total_price',
    ];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
    public function Order()
    {
        return $this->hasMany(Order::class);
    }

}
