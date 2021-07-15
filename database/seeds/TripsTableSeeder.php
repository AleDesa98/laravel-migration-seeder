<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTrip = config('trip');

        foreach ($arrayTrip as $item) {
            $trip = new Trip();

            $trip->destination = $item["destination"];
            $trip->price = $item["price"];
            $trip->itinerary = $item["itinerary"];
            $trip->days = $item["days"];

            $trip->save();
        }
    }
}
