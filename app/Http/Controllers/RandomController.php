<?php

namespace App\Http\Controllers;

use App\Models\Continent;
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
        $continent = $request->get('continent');


        foreach (Continent::all() as $conti) {
            var_dump($conti['continent']);
        }

        // $getContinent = Continent::where('id', '2')
        //     ->get();

        // dd($getContinent);
    }


    // foreach (Continent::all() as $continent) {
    //     echo $continent->name;
    // }
}
