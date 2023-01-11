<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorDetail;
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
        DoctorDetail::factory()->count(30)->create();
        Doctor::factory()->count(30)->create();
    }
}
