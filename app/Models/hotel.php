<?php

namespace App\Models;

use App\Models\Hotel as ModelsHotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;


    public function room(): HasMany
    {
        return $this->hasMany(room::class);
    }

    public function hotelOwner(): BelongsTo
    {
        return $this->belongsTo(hotelOwner::class);
    }
    protected $table = 'hotels';
    
    protected $fillable = [
        'name',
        'address',
        'type',
    ];


    public function hotelImg()
    {
        return $this->belongsTo(Hotel::class);
        
    }
    public function hotelOwner()
    {
        return $this->hasMany(HotelOwner::class,$foreignkey='hotel_owner_id');
        
    }
    public function room()
    {
        return $this->hasMany(Room::class);
        
    }






    public function room(): HasMany
    {
        return $this->hasMany(room::class);
    }

    public function hotelOwner(): BelongsTo
    {
        return $this->belongsTo(hotelOwner::class);
    }
}
