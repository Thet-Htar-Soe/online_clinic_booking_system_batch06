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
        $this->call([
            DoctorSeeder::class,
            DoctorDetailSeeder::class,
            MedicineSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
