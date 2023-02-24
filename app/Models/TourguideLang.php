<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourguideLanguage extends Model
{
    use HasFactory;
    protected $fillable = [
        'language',
        'tourguide_id'
    ];

    public function Tourguide(){
        return $this->belongsTo(Tourguide::class,'tourguide_id');
    }
}

