<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testRequiredFieldsForLogin()
    {
        $this->json('POST', '/login', ['Accept' => 'application/json'])
            ->assertStatus(422)
            ->assertJson([
                "message" => "The given data was invalid.",
                "errors" => [
                    "email" => ["The email field is required."],
                    "password" => ["The password field is required."],
                ]
            ]);
    }

    public function testSuccessfulLogin()
    {
        $loginData = ['email' => 'admin@theremotecompany.com', 'password' => 'password12345'];

        $this->json('POST', '/login', $loginData, ['Accept' => 'application/json'])
            ->assertStatus(204);

        $this->assertAuthenticated();
    }
}
