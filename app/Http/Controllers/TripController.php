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
        $trip = $country->country;

        $selected_country_id = Country::where('country', '=', $trip)->get('id');

        $id = auth()->user()->id;
        $traveled_places_id = [];
        $country_id = Trip::distinct('user_id', '=', $id)->get();

        foreach ($country_id as $uniqe_id) {
            array_push($traveled_places_id, $uniqe_id->country_id);
        }

        $list = [];
        foreach ($traveled_places_id as $travaled_places) {
            $travaled_places_name = Country::where('id', '=', $travaled_places)->get();
            foreach ($travaled_places_name as $key => $value) {
                array_push($list, $value->country);
            }
        }

        foreach ($selected_country_id as $country) {
            Trip::insert(
                [
                    'user_id' => auth()->user()->id,
                    'country_id' => $country->id,
                ]
            );
            return view('trips', [
                'trip' => $trip,
                'traveled_places_id$traveled_places_id' => $traveled_places_id,
                'list' => $list,

            ]);
        };
    }
}
