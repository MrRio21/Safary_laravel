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
        'price_per_day',
        'syndicate_No',
        'desc',
       'user_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }
    public function Order()
    {
        return $this->hasMany(Order::class , 'book_tour_guide', 'order_id', 'tourGuide_id');
        
    }
}
