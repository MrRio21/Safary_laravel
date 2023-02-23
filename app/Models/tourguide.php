<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tourguide extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'price',
        'syndicate_No',
        'desc',
       'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }
}
