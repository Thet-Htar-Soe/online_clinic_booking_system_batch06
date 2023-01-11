<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Medicine::factory()->count(30)->create();
        \App\Models\Category::factory()->count(30)->create();
    }
}
