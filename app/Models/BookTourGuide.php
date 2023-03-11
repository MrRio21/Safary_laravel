<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookTourGuide extends Model
{
    protected $table = 'book_tour_guide';
    use HasFactory;
    protected $fillable =[
        'tourguide_id',
        'order_id',
        'tourguide_status',
        'n_of_days',

    ];
    // public $timestamps = false;
    public function Order(){
        return $this->hasMany(Order::class);
    }
    public function Tourguide(){
        return $this->belongsTo(Tourguide::class);
    }

}
