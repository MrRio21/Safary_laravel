<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class HotelOwner extends Model
{

    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'commercial_reg_No',
        'user_id'

    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Hotel()
    {
        return $this->hasMany(Hotel::class);
    }
    public function BookedRoom()
    {
        return $this->hasMany(BookedRoom::class);
    }
}
