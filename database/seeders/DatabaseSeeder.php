<?php

namespace Database\Seeders;

use App\Models\Continent;
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
        Continent::create([
            'continent' => 'Asia',
            'continent' => 'Africa',
            'continent' => 'Europe',
            'continent' => 'North America',
            'continent' => 'South America',
            'continent' => 'Oceania/Australia',
        ]);
    }
}
