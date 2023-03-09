<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChosenTrip extends Model
{
    use HasFactory;

    protected $fillable =[
        'user_id',
        'trip_id',
        'status'

    ];

    public function Trip(){
        return $this->hasMany(Trip::class );
    }
    public function User(){
        return $this->hasMany(User::class );
    }
}
