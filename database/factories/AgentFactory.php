<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agent>
 */
class AgentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name',
            'description',
            'designation',
            'email',
            'phone',
            'address' => $this->faker->streetAddress(),
            'address 2' => $this->faker->streetAddress(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'postal_code' => $this->faker->postcode(),
            'facebook',
            'twitter',
            'instagram',
            'linkedin',
            //'photo',
        ];
    }
}
