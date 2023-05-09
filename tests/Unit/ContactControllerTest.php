<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Report;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase; 

    public function testShow()
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertViewIs('contact');
    }

    public function testSend()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'reason' => 'Bug Report',
            'description' => 'A bug occurred when trying to submit a form.',
        ];

        $response = $this->post('/contact', $data);

        $response->assertRedirect();
        $response->assertSessionHas('status', 'Report submitted successfully.');

        $this->assertDatabaseHas('reports', [
            'name' => $data['name'],
            'email' => $data['email'],
            'reason' => $data['reason'],
            'description' => $data['description'],
        ]);
    }
}
