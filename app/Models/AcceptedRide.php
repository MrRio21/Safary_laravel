<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcceptedRide extends Model
{
    use HasFactory;

    protected $fillable =[
        'driver_id',
        'request_ride_id',
        'user_id'
    ];
    public function Driver(){
        return $this->belongsTo(Driver::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function RequestRide(){
        return $this->belongsTo(RequestRide::class);
    }
}
