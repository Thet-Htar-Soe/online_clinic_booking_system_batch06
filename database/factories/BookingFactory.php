<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use File;

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
        $bookingJson = File::get("database/data/booking.json");
        return [
            'book_date' => json_decode($bookingJson),
            'doctor_id' =>  $this->faker->randomElement($doctor_id),
            'patient_id' =>  $this->faker->randomElement($patient_id),
        ];
    }
}
