<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $country =  $request->get('country');



        //Get country id -> insert country id and user id in trips

        //foreach country id where user id = ?? ->get
        return view('dashboard', [
            'country' => $country
        ]);
    }
}
