<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegularBookedRoom extends Model
{
    protected $table = 'regular_booked_room';
    use HasFactory;


    protected $fillable =[
        'check_in',
        'check_out',
        'n_of_adults',
        'n_of_childeren',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
