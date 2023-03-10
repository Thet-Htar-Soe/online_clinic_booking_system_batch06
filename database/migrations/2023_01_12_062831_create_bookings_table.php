<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->json('book_date')->nullable()->comment('Booking DateTime');
            $table->foreignId('doctor_id')->comment("Doctor ID")->constrained()->onDelete('cascade');
            $table->foreignId('patient_id')->comment("Patient ID")->constrained()->onDelete('cascade');
            $table->tinyInteger('status')->default(0)->nullable()->comment('0: request to doctor, 1: waiting from doctor confirm, 2: accept from doctor, 3: deny from doctor, 4: finished[appointment OK], 5: cancel [appointment failed], 6: request other date to doctor');
            $table->softDeletes()->comment('Deleted_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
