<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class RegisterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __invoke(Request $request)
    {

        $user = User::create(['name' => $request['name'], 'email' => $request['email'], 'password' => hash::make($request['password'])]);
        // auth()->login($user);
        return redirect('/')->with('Your account was successfully registered');
    }
}
