<?php

namespace App\Models;

use App\Models\Hotel as ModelsHotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $table = 'hotels';
    
    protected $fillable = [
        'name',
        'address',
        'type',
    ];


    public function room()
    {
        return $this->hasMany(room::class);
    }

    public function hotelOwner()
    {
        return $this->belongsTo(hotelOwner::class);
    }

    public function hotelImg()
    {
        return $this->belongsTo(Hotel::class);
        
    }

}
