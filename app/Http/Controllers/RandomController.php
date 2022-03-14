<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Continent;
use Illuminate\Http\Request;

class RandomController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Continent $continent, Request $request)
    {

        $countries = $continent->countries;

        $country = $countries->toArray();

        $random = array_rand($country);

        return view('dashboard', [
            'continent' => $continent,
            'country' => $countries[$random]['country'],
            'continents' => Continent::with('countries')->get()
        ]);
    }
}
