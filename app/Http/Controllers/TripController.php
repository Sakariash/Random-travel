<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Trip;

class TripController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Country $country, Request $request)
    {
        // $country =  $request->get('country');

        $trip = $country->country;
        // dd($trip);

        $_SESSION['destination'] = [];

        array_push($_SESSION['destination'], $trip);
        $test = Country::where('country', '=', $trip)->get('id');

        // dd($_SESSION['destination']);
        foreach ($test as $tes) {
            // dd($tes->id);
            Trip::insert(
                [
                    'user_id' => auth()->user()->id,
                    'country_id' => $tes->id,
                ]
            );
            return view('dashboard', [
                'trip' => $trip
            ]);
        }






        //Get country id -> insert country id and user id in trips

        //foreach country id where user id = ?? ->get
        return view('trips');
    }
}
