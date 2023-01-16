<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class MedicineCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $medicine_id = DB::table('medicines')->pluck('id');
        $category_id = DB::table('categories')->pluck('id');
        return [
            'medicine_id' => $this->faker->randomElement($medicine_id),
            'category_id' => $this->faker->randomElement($category_id),
        ];
    }
}
