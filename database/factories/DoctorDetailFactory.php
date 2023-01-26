<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
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
        $depertment=["General Surgery", "Dental"];
        $doctor_id = DB::table('doctors')->pluck('id');
        return [
            'doctor_id' =>  $this->faker->unique()->numberBetween($min = $doctor_id[0], $max = $doctor_id[count($doctor_id)-1]),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make('batch06gp2'),
            'degree' => $this->faker->sentence(3),
            'department' => $this->faker->randomElement($depertment),
            'experience' => $this->faker->randomDigit(),
            'specialist' => $this->faker->randomElement($depertment),
            'dob' => $this->faker->date(),
            'phone' => $this->faker->phoneNumber(),
            'gender' => $this->faker->randomElement(['male', 'female', 'unknown', 'unapplicable']),
            'address' => $this->faker->sentence(5),
            'about_me' => $this->faker->sentence(5),
        ];
    }
}
