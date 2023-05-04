<?php

namespace Tests\Unit\Controllers;

use App\Models\User;
use Tests\TestCase;

class RegisterControllerTest extends TestCase
{
    public function test_show_method_returns_view()
    {
        $response = $this->get('/register');

        $response->assertViewIs('register');
    }

    public function test_store_method_creates_new_user()
    {
        $data = [
            'username' => 'johndoe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $this->post('/register', $data);

        $this->assertDatabaseHas('users', [
            'username' => 'johndoe',
            'email' => 'johndoe@example.com',
        ]);
    }

    public function test_store_method_redirects_to_home()
    {
        $data = [
            'username' => 'johndoe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $data);

        $response->assertRedirect('/');
    }

    public function test_store_method_logs_in_user()
    {
        $user = User::factory()->create([
            'email' => 'johndoe@example.com',
            'password' => bcrypt('password'),
        ]);

        $data = [
            'username' => 'johndoe',
            'email' => 'johndoe@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $data);

        $this->assertAuthenticatedAs($user);
    }

    public function test_store_method_with_invalid_data_fails_validation()
    {
        $data = [
            'username' => 'johndoe',
            'email' => 'invalidemail',
            'password' => 'password',
            'password_confirmation' => 'invalidpassword',
        ];

        $response = $this->post('/register', $data);

        $response->assertSessionHasErrors(['email', 'password_confirmation']);
    }
}
