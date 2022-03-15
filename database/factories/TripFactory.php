<?php

namespace Database\Factories;

use App\Models\Continent;
use App\Models\Country;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'user_id' => User::all()->random()->id,
            'country_id' => Country::all()->random()->id
        ];
    }
}
