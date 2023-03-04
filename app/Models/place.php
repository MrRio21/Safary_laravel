<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'cover_img',
        'type'
       
    ];

     public function PlaceImg(){
        return $this->hasMany(PlaceImg::class);
     }
     public function Order(){
        return $this->belongsTo(order::class);
     }
     public function Trip()
     {
         return $this->hasMany(Trip::class , 'PlacesOfRecommTrips', 'trip_id', 'trip_id');
     }
}
