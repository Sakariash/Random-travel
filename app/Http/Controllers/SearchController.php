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

        $get_country = Country::where('country', 'LIKE', '%' . $search . '%')->first();

        $search = $get_country->toArray();

        return redirect("/random/check/$get_country->country");
    }
}
