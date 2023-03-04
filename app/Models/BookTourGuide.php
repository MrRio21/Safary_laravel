<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTourGuide extends Model
{
    use HasFactory;
    protected $fillable =[
        'tourguide_id',
        'order_id',

    ];

    public function Order(){
        return $this->hasMany(Order::class);
    }
    public function Tourguide(){
        return $this->belongsTo(Tourguide::class);
    }

}
