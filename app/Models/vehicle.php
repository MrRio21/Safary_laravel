<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;

    public function driver(): BelongsTo
    {
        return $this->belongsTo(driver::class);
    }
}
