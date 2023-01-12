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
            $table->json('book_date')->comment('Booking DateTime')->nullable();
            $table->foreignId('doctor_id')->comment("Doctor ID")->constrained()->onDelete('cascade');
            $table->tinyInteger('status')->comment('0: request to doctor, 1: waiting from doctor confirm, 2: accept from doctor, 3: deny from doctor, 4: finished[appointment OK], 5: cancel [appointment failed], 6: request other date to doctor')->default(0)->nullable();
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
