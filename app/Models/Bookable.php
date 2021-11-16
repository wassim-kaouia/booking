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
    // to make the scope request more readable i put this boolean function inside the bookable model to check boolean availability
    public function availableFor($from,$to){
        return $this->bookings()->betweenDates($from,$to)->count() == 0 ? false : true;
    }
    
}
