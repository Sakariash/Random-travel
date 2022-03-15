<?php

namespace Tests\Feature;

use App\Models\Continent;
use App\Models\User;
use Database\Factories\ContinentFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RandomTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_random_country_link()
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

        $response->assertOk();
    }
}
