<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use illuminate\Support\Facades\DB;

class RandomController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // dd($request->get('continent'));
        // $continent =  $request->get('continent');
        //Select id where continent = continent
        //Select all countries where continent-id = id
        //random country return


        $user = Auth::user();

        $countries = DB::table('countries')->get('country');
        return view('dashboard', [
            'user' => $user,
            'countries' => $countries,
        ]);
    }
}
