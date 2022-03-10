<?php

namespace Tests\Feature;

use App\Http\Controllers\RegisterController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{

    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_view_register_form()
    {
        $response = $this->get('register');
        $response->assertSeeText('Email');
        $response->assertStatus(200);
    }
    public function test_register_user()
    {
        $user = new User();
        $user->name = 'register';
        $user->email = 'test@test.com';
        $user->password = '123';
        $user->save();

        $response = $this->followingRedirects()
            ->post('register', [
                'name' => 'register',
                'email' => 'register@user.com',
                'password' => '123',
            ]);
        $response->assertStatus(200);
    }
}
