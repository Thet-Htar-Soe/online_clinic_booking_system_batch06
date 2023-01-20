<?php

namespace Database\Seeders;

use App\Models\Booking;
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
            PatientSeeder::class,
            DoctorSeeder::class,
            DoctorDetailSeeder::class,
            AdminSeeder::class,
            MedicineSeeder::class,
            CategorySeeder::class,
            MedicineCategorySeeder::class,
            BookingSeeder::class,
            InvoiceSeeder::class,
            InvoiceDetailSeeder::class
        ]);
    }
}
