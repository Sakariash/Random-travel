<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Continent;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $search = $request->get('search');


        $search_country = Country::where('country', 'LIKE', '%' . $search . '%')->get();
        $search = $search_country->toArray();

        return view('dashboard', [
            'search' => $search,
            'continents' => Continent::with('countries')->get()
        ]);
    }
}
