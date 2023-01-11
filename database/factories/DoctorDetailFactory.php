<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class DoctorDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doctor_id' =>  $this->faker->randomDigit(),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make($this->faker->password()),
            'degree' => $this->faker->sentence(3),
            'department' => $this->faker->sentence(3),
            'experience' => $this->faker->randomDigit(),
            'specialist' => $this->faker->sentence(3),
            'dob' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->sentence(5),
            'about_me' => $this->faker->sentence(5),
        ];
    }
}
