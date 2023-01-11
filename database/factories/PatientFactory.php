<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
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
            'email' => $this->faker->email(),
            'password' => $this->faker->password(),
            'phone' => $this->faker->phoneNumber(),
            'age' => $this->faker->numberBetween(1,100),
            'gender' => $this->faker->randomElement(['m','f','k','a']),
            'address' => $this->faker->address(),
            'blood_type' => $this->faker->randomElement(['A','AB','B','O']),
        ];
    }
}
