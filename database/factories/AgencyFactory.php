<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agency>
 */
class AgencyFactory extends Factory
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
            'ceo',
            'email',
            'phone',
            'skype',
            'address',
            'country',
            'city',
            'postal_code',
            'facebook',
            'twitter',
            'instagram',
            'linkedin',
            'stab',
            //'logo',
            'property_id'
        ];
    }
}
