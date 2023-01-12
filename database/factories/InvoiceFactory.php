<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $booking_id = DB::table('bookings')->pluck('id');
        return [
            'booking_id' => $this->faker->randomElement($booking_id),
            'invoice_no' =>  $this->faker->numberBetween(0, 100),
        ];
    }
}
