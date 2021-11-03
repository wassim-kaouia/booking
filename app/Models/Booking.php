<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bookable;

class Booking extends Model
{
    use HasFactory;

    protected $guareded = [];
    
    public function bookable(){
        return $this->belongsTo(Bookable::class);
    }
}
