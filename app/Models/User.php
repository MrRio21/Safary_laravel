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

    public function tourgide()
    {
        return [
        $this->hasOne(tourgide::class),
        $this->hasOne(hotelOwner::class),
        $this->hasOne(driver::class)
    ];
    }

    public function order()
    {
        return $this->hasMany(order::class);
    }

}
