<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverRequest extends Model
{
    use HasFactory;
    protected $fillable = [
        'driver_id',
        'request_ride_id',
        'price'
    ];

    public function Driver(){
        return $this->belongsto(Driver::class);
    }
    public function AcceptedRide(){
        return $this->belongsto(AcceptedRide::class);
    }
}
