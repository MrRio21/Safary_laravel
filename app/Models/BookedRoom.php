<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedRoom extends Model
{
    use HasFactory;

    protected $fillable = [
        'n_of_booked_rooms',
        'n_of_adults',
        'n_of_childeren',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
    public function hotel()
    {
        return $this->belongsTo(Order::class);
    }


}
