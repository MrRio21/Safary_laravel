<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'image'
    ];

    public function Tourguide()
    {
        return [
        $this->hasOne(tourgide::class),
        $this->hasOne(hotelOwner::class),
        $this->hasOne(driver::class)
    ];
    }

    public function Order()
    {
        return $this->hasMany(order::class);
    }
    public function Trip(){
        return $this->hasMany(Trip::class , 'ChosenTrip', 'order_id', 'room_id');
    }
   

}
