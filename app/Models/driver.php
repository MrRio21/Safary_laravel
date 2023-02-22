<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Driver extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'license',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'foreign_key');
    }

    public function vehicle()
    {
        return $this->hasMany(vehicle::class);
    }

}
