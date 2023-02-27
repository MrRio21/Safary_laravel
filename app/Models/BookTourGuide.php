<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTourGuide extends Model
{
    use HasFactory;
    protected $fillable =[
        'tourGuide_id',
        'order_id',

    ];

    public function Order(){
        return $this->hasMany(Order::class);
    }
    public function TourGuide(){
        return $this->belongsTo(Tourguide::class);
    }

}
