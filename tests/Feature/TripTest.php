<?php

namespace Tests\Feature;

use App\Models\Trip;
use App\Models\Country;
use App\Models\Continent;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TripTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_place_random_country_in_list()
    {
        $this->seed();
        $user = new User();
        $user->name = $this->faker->name();
        $user->email = $this->faker->email();
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => $user->email,
                'password' => '123',
            ]);

        $continent = Continent::first();

        $response = $this
            ->actingAs($user)
            ->get("random/{$continent->continent}");

        $response->assertSeeText('Would you like to logout?');
        $country = Country::first();
        $response = $this->actingAs($user)->get("random/check/{$country->country}");

        $response->assertSuccessful();
    }
}
