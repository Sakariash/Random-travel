<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Trip;

class DeleteTripController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Country $country, Request $request)
    {
        $country_id = $country->id;

        Trip::where('country_id', $country_id)->delete();

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

        return view('trips', [
            'list' => $list,

        ]);
    }
}
