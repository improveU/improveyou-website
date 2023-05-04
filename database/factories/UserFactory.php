<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'username' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '12345678',
            'address' => fake()->address(),
            'city' => fake()->city(),
            'country' => fake()->countryCode(),
            'zip_code' => fake()->postcode(),
            'description' => fake()->paragraph(),
            'remember_token' => Str::random(10),
            'profile_picture_path' => 'profiles/defaultProfilePicture.svg',
            'subscription_id' => fake()->numberBetween(1, 3)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
