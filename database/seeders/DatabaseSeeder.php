<?php

namespace Database\Seeders;

use App\Models\Bookable;
use Illuminate\Database\Seeder;
use App\Models\Booking;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Bookable::factory(24)->create();
        Bookable::all()->each(function(Bookable $bookable){
            $mybooking = $bookable;
            $booking  = Booking::factory()->make();
            $bookings = collect([$booking]);
            for($i=0; $i<random_int(1,20); $i++){
                $from = (clone $booking->to)->addDays(random_int(1,14));
                $to   = (clone $from)->addDays(random_int(0,14));
                //mass assignment
                $booking = Booking::make([
                    'from' => $from,
                    'to'   => $to,
                ]); 
                $bookings->push($booking);
            }
            $bookable->bookings()->saveMany($bookings);
        });
    }
}
