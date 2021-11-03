<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bookable;
use Illuminate\Database\Eloquent\Builder;

class Booking extends Model
{
    use HasFactory;

    protected $guareded = [];
    
    public function bookable(){
        return $this->belongsTo(Bookable::class);
    }


    //create a local scope query
    public function scopeBetweenDates(Builder $query,$from,$to){
        return $query->where('to','>=',$from)
                ->where('from','<=',$to);
    }
}
