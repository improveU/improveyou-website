<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PaymentControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function testShowOverview()
    {
        $user = User::factory()->create();

        $this->actingAs($user);
        $response = $this->get('/payment/overview');

        $response->assertViewIs('payment');
        $response->assertStatus(200);
    }

    public function testStoreData()
    {
        $user = User::factory()->create();
        $id = 1; 

        $this->actingAs($user);

        $data = [
            'first_name' => $this->faker()->firstName(),
            'last_name' => $this->faker()->lastName(),
            'city' => $this->faker()->city(),
            'country' => $this->faker()->country(),
            'postal_code' => $this->faker()->postcode(),
            'address' => $this->faker()->streetAddress(),
        ];

        $this->post('/payment/' . $id, $data);

        $updatedUser = User::findOrFail($user->id);
        $this->assertEquals($data['first_name'], $updatedUser->first_name);
        $this->assertEquals($data['last_name'], $updatedUser->last_name);
        $this->assertEquals($data['city'], $updatedUser->city);
        $this->assertEquals($data['country'], $updatedUser->country);
        $this->assertEquals($data['postal_code'], $updatedUser->zip_code);
        $this->assertEquals($data['address'], $updatedUser->address);
        $this->assertEquals($id, $updatedUser->subscription_id);
    }

    public function testCancelSubscription()
    {
        $user = User::factory()->create(['subscription_id' => 1]);


        $this->actingAs($user);
        $response = $this->post('/cancelSubscription');

        $response->assertRedirect('/');
        $response->assertSessionHas('status', 'Your subscription is now active');
        $response->assertStatus(302);

        $updatedUser = User::findOrFail($user->id);
        $this->assertEquals(0, $updatedUser->subscription_id);
    }
}
