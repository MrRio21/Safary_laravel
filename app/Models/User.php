<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use Tymon\JWTAuth\Contracts\JWTSubject;

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
        'image',
        'role_id',
        'phone'
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

    public function hasRole(){
        // dd('hi');
        return $this->belongsTo(Role::class);
    }
     /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    // public function getJWTIdentifier()
    // {
    //     return $this->getKey();
    // }

    // /**
    //  * Return a key value array, containing any custom claims to be added to the JWT.
    //  *
    //  * @return array
    //  */
    // public function getJWTCustomClaims()
    // {
    //     return [];
    // }

}
