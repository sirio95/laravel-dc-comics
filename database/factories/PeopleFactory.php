<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'date' => fake()->dateTimeBetween('- 100 years', now()),
            'height' => fake()->numberBetween(100, 250)
        ];
    }
}