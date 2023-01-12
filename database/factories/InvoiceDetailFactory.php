<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class InvoiceDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $invoice_id = DB::table('invoices')->pluck('id');
        return [
            'invoice_id' => $this->faker->randomElement($invoice_id),
            'medicines' =>  $this->faker->sentence(3),
            'doctor_charges' =>  $this->faker->numberBetween(1000, 10000),
            'grand_total' =>  $this->faker->numberBetween(1000, 10000),
        ];
    }
}
