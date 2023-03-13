<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;


    protected $fillable = [
        'type',
        'license',
        'image',
        'driver_id'

    ];

    public function Driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
