<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_dashboard()
    {

        $response = $this->get('/');
        $response->assertStatus(200);
    }
    public function test_view_dashboard_as_user()
    {
        $user = new User();
        $user->name = 'Jennifer';
        $user->email = 'jenn@jenn.se';
        $user->password = Hash::make('123');
        $user->save();

        $response = $this->actingAs($user)->get('/dashboard');
        $response->assertSeeText('Where do you want to travel next?');
        $response->assertStatus(200);
    }
}
