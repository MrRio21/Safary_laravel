<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

       
    protected $fillable = [
        'price',
        'available_rooms',
        'type',
    ];





    public function hotel()
    {
        return $this->belongsTo(Hotel::class,$foreignkey ='hotel_id');
        
    }

    public function hotel(): BelongsTo
    {
        return $this->belongsTo(hotel::class);
    }
}
