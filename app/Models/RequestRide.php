<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestRide extends Model
{
    use HasFactory;
     protected $fillable = [
        'position',
        'destination',
        'date',
        'type',
        'status',
        'user_id',
    ];
    public function User (){
        return $this->belongsto(User::class);
    }
    public function DriverRequest(){
        return $this->belongsto(DriverRequest::class);
    }
}
