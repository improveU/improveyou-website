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
            'username' => 'john',
            'email' => 'john@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $this->post('/register', $data);

        $this->assertDatabaseHas('users', [
            'username' => 'john',
            'email' => 'john@example.com',
        ]);
    }

    public function test_store_method_redirects_to_home()
    {
        $data = [
            'username' => 'john',
            'email' => 'john@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ];

        $response = $this->post('/register', $data);

        $response->assertRedirect('/');
    }
}
