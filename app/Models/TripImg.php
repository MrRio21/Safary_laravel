<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TripImg extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'trip_id'
    ];

    public function Trip(){
        return $this->belongsTo(Trip::class);
    }

}
