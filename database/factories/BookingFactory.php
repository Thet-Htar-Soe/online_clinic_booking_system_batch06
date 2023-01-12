<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $patient_id = DB::table('patients')->pluck('id');
        $doctor_id = DB::table('doctors')->pluck('id');
        return [
            'book_date' => $this->faker->dateTimeBetween('now', '+1 week'),
            'doctor_id' =>  $this->faker->randomElement($doctor_id),
            'patient_id' =>  $this->faker->randomElement($patient_id),
        ];
    }
}
