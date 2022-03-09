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

        $request = new User();

        $request->name = 'tester';
        $request->email = 'test@test.com';
        $request->password = Hash::make('123');
        $request->save();

        $response = $this
            ->actingAs($request)
            ->post('register', [
                'name' => 'tester',
                'email' => 'test@test.com',
                'password' => '123'
            ]);
        $response->assertStatus(200);
        $response->assertSeeText('Whoops! Please try to login again.');
    }
}
