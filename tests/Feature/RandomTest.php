<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RandomTest extends TestCase
{
    use RefreshDatabase;

    public function test_get_random_country()
    {
        $user = new User();
        $user->name = 'Jennifer';
        $user->email = 'jenn@jenn.se';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'jenn@jenn.se',
                'password' => '123',
            ]);

        $response = $this
            ->actingAs($user)
            ->get('random/{continent:continent}', [
                'name' => 'random.country',
            ]);
        $response->assertOk();
    }
}
