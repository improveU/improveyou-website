<?php

use App\Http\Controllers\ProfileController;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;


class ProfileControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testUpdateProfile()
    {
        $user = User::factory()->create(['username' => 'Hans']);
        $this->actingAs($user);

        $data = [
            'username' => 'new_username',
            'email' => 'new_email@example.com',
        ];
        $response = $this->post('/updateProfile', $data);

        $user = User::findOrFail(auth()->user()->id);
        $this->assertEquals($data['username'], $user->username);
        $this->assertEquals($data['email'], $user->email);

        $response->assertRedirect('/profile#');
        $response->assertSessionHas('status', 'Profile updated');
    }

    public function testUpdateProfileDescription()
    {
        $user = User::factory()->create();
        $this->actingAs($user);


        $data = [
            'description' => 'New profile description',
            'activeTab' => 'profileOverview',
        ];

        $response = $this->post('/updateProfileDescription', $data);

        $this->assertEquals('New profile description', $user->description);

        $response->assertRedirect('/profile#profileOverview');
        $response->assertSessionHas('status', 'Profile description updated');
    }

    public function testUpdateBilling()
    {
        $user = User::factory()->create(['subscription_id' => 1]);
        $this->actingAs($user);

        $data = [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'city' => 'New York',
            'postal_code' => '12345',
            'address' => '123 Main St',
            'activeTab' => 'profileOverview',
        ];

        $response = $this->post('/updateBilling', $data);

        $this->assertEquals('John', $user->first_name);
        $this->assertEquals('Doe', $user->last_name);
        $this->assertEquals('New York', $user->city);
        $this->assertEquals('123 Main St', $user->address);

        $response->assertRedirect('/profile#profileOverview');
        $response->assertSessionHas('status', 'Billing updated');
    }
        }
