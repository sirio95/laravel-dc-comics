<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\People>
 */
class PeopleFactory extends Factory
{
    public function definition()
    {
        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'birth_date' => fake()->dateTimeBetween('-100 years', now()),
            'height' => fake()->numberBetween(100, 250)
        ];
    }
}