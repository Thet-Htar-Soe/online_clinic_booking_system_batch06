<?php

namespace Database\Seeders;

use App\Models\DoctorDetail;
use Illuminate\Database\Seeder;

class DoctorDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DoctorDetail::factory()->count(30)->create();
    }
}
