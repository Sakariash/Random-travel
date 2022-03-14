<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Continent;
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

        $id = auth()->user()->id;
        $destination = [];
        $country_id = Trip::distinct('user_id', '=', $id)->get();

        foreach ($country_id as $uniqe_id) {
            array_push($destination, $uniqe_id->country_id);
        }

        $favourites = Country::where('id', '=', $destination)->get();
        // dd($favourites);

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
                'trip' => $trip,
                'destination' => $destination,
                'continents' => Continent::with('countries')->get()
            ]);
        }






        //Get country id -> insert country id and user id in trips

        //foreach country id where user id = ?? ->get
        return view('trips');
    }
}
