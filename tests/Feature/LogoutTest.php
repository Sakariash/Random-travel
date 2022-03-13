<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_logout()
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

        $response->assertSeeText('Not a member? Sign up');
        $response = Auth::logout();
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
