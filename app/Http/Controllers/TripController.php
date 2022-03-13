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


        $trips = $country->country;
        // dd($trips);
        $test = Country::where('country', '=', $trips)->get('id');
        foreach ($test as $tes) {
            dd($tes->id);

            Trip::insert(
                [
                    'user_id' => auth()->user()->id,
                    'country_id' => $tes->id,
                ]
            );
        }






        //Get country id -> insert country id and user id in trips

        //foreach country id where user id = ?? ->get
        return view('trips');
    }
}
