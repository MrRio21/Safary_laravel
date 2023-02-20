<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class request_ride extends Model
{
    use HasFactory;
    protected $fillable = [
        'position',
        'destination',
        'date',
        'status',
        'user_id',
    ];
    public function User (){
        return $this->belongsto(User::class);
    }
}
