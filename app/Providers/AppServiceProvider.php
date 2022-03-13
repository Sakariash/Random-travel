<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Continent;
use App\Models\Trip;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $continents = Continent::all();
        $trips = Trip::all();

        view()->share('continents', $continents);
        view()->share('trips', $trips);
    }
}
