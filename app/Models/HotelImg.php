<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelImg extends Model
{
    use HasFactory;

   
    protected $fillable = [
        'hotel_id',
        'image',
       
    ];








    public function hotel()
    {
        return $this->hasMany(HotelImg::class,$foreignkey ='hotel_id');
        
    }
}
