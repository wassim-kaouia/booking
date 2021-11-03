<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bookable;

class BookableAvailabilityController extends Controller
{
    
    public function __invoke($id,Request $request)
    {
        $data = $request->validate([
           'from' => 'required|date_format:Y-m-d|after_or_equal:now',
           'to'   => 'required|date_format:Y-m-d|after_or_equal:from',
        ]);

        $bookable = Bookable::findOrFail($id);
        //when relation is with () this means we return the relation query builder so we can apply on it eloquent methods and scopes
        return $bookable->availableFor($data['from'],$data['to']) ? 
               response()->json([
                   'message' => 'Your booking is available for this date !'
               ]) : 
               response()->json([
                   'message' => 'Your booking is unavailable... try another date please !'
               ],404);
    }
}
