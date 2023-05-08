<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function guests_can_view_the_login_form()
    {
        $response = $this->get('/login');

        $response->assertOk();
        $response->assertViewIs('login');
    }

    /** @test */
    public function users_can_log_in_with_valid_credentials()
    {
        $attributes = [
            'username' => 'test',
            'email' => 'test@test.com',
            'password' => 'password',
        ];

        $user = User::create($attributes);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password'
        ]);

        $response->assertRedirect('/');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function users_cannot_log_in_with_invalid_credentials()
    {
        $attributes = [
            'username' => 'test',
            'email' => 'test@test.com',
            'password' => 'password',
        ];

        $user = User::create($attributes);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password'
        ]);

        $response->assertSessionHasErrors('email');
        $this->assertGuest();
    }

    /** @test */
    public function authenticated_users_can_log_out()
    {
        $attributes = [
            'username' => 'test',
            'email' => 'test@test.com',
            'password' => 'password',
        ];

        $user = User::create($attributes);
        $this->actingAs($user);

        $response = $this->post('/logout');

        $response->assertRedirect('/');
        $this->assertGuest();
    }
}
