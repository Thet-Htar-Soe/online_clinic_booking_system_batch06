<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use File;

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
        $medicineJson = File::get("database/data/invoice_detail.json");
        return [
            'invoice_id' => $this->faker->randomElement($invoice_id),
            'medicines' =>  json_decode($medicineJson),
            'doctor_charges' =>  $this->faker->numberBetween(1000, 10000),
            'grand_total' =>  $this->faker->numberBetween(1000, 10000),
            'created_at' => $this->faker->dateTimeBetween(),
        ];
    }
}
