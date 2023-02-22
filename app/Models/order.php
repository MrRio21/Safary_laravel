<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function placesOfRecommTrips(): BelongsTo
    {
        return $this->belongsTo(placesOfRecommTrips::class);
    }
}
