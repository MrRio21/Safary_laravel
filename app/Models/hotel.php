<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
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
}
