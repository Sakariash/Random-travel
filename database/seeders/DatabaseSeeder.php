<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $continents = [
            new Continent(['continent' => 'Asia']),
            new Continent(['continent' => 'Africa']),
            new Continent(['continent' => 'Europe']),
            new Continent(['continent' => 'North America']),
            new Continent(['continent' => 'South America']),
            new Continent(['continent' => 'Oceania/Australia']),
        ];

        foreach ($continents as $continent) {
            $continent->save();
        }

        $countries = [
            new Country([
                'country' => 'Uzbekistan',
                'continent_id' => 1
            ]),
            new Country([
                'country' => 'Saudi Arabia',
                'continent_id' => 1
            ]),
            new Country([
                'country' => 'Afghanistan',
                'continent_id' => 1
            ]),
            new Country([
                'country' => 'Iraq',
                'continent_id' => 1
            ]),
            new Country([
                'country' => 'Algeria',
                'continent_id' => 2
            ]),
            new Country([
                'country' => 'Uganda',
                'continent_id' => 2
            ]),
            new Country([
                'country' => 'Kenya',
                'continent_id' => 2
            ]),
            new Country([
                'country' => 'South Africa',
                'continent_id' => 2
            ]),
            new Country([
                'country' => 'Tanzania',
                'continent_id' => 2
            ]),
            new Country([
                'country' => 'Uganda',
                'continent_id' => 2
            ]),
            new Country([
                'country' => 'Algeria',
                'continent_id' => 3
            ]),
            new Country([
                'country' => 'United Kingdom',
                'continent_id' => 3
            ]),
            new Country([
                'country' => 'France',
                'continent_id' => 3
            ]),
            new Country([
                'country' => 'Italy',
                'continent_id' => 3
            ]),
            new Country([
                'country' => 'Spain',
                'continent_id' => 3
            ]),
            new Country([
                'country' => 'Ukraine',
                'continent_id' => 3
            ]),
            new Country([
                'country' => 'Jamaica',
                'continent_id' => 4
            ]),
            new Country([
                'country' => 'Puerto Rico',
                'continent_id' => 4
            ]),
            new Country([
                'country' => 'Panama',
                'continent_id' => 4
            ]),
            new Country([
                'country' => 'Costa Rica',
                'continent_id' => 4
            ]),
            new Country([
                'country' => 'Bahamas',
                'continent_id' => 4
            ]),
            new Country([
                'country' => 'Venezuela',
                'continent_id' => 5
            ]),
            new Country([
                'country' => 'Peru',
                'continent_id' => 5
            ]),
            new Country([
                'country' => 'Argentina',
                'continent_id' => 5
            ]),
            new Country([
                'country' => 'Colombia',
                'continent_id' => 5
            ]),
            new Country([
                'country' => 'Brazil',
                'continent_id' => 5
            ]),
            new Country([
                'country' => 'Australia',
                'continent_id' => 5
            ]),
            new Country([
                'country' => 'Papua New Guinea',
                'continent_id' => 5
            ]),
            new Country([
                'country' => 'New Zealand',
                'continent_id' => 5
            ]),
            new Country([
                'country' => 'Fiji',
                'continent_id' => 5
            ]),
            new Country([
                'country' => 'Solomon Islands',
                'continent_id' => 5
            ]),
        ];

        foreach ($countries as $country) {
            $country->save();
        }
    }
}
