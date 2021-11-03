<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Bookable extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
    
}
