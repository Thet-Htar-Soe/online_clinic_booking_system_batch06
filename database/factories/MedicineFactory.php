<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MedicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'classification' => $this->faker->sentence(3),
            'symptom' => $this->faker->text(100),
            'treatment' => $this->faker->text(100),
            'quantity' => $this->faker->randomDigit(),
            'price' => $this->faker->numberBetween(100, 1000)
        ];
    } 
}
