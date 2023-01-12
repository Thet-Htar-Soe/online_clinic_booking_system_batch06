<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_details', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('doctor_id')->comment("Doctor's Id")->constrained()->onDelete('cascade');
            $table->string('name')->comment('Name');
            $table->string('email')->comment('Email')->unique();
            $table->string('password')->comment('Password');
            $table->string('degree')->comment('Degree');
            $table->string('department')->comment('Department');
            $table->string('experience')->comment('Experience');
            $table->string('specialist')->comment('Specialist');
            $table->date('dob')->nullable()->comment('Date Of Birth');
            $table->string('phone')->nullable()->comment('Phone');
            $table->char('gender', 1)->comment('m:male, f:female, k:unknown, a:unapplicable');
            $table->text('address')->nullable()->comment('Address');
            $table->text('about_me')->nullable()->comment('About Me');
            $table->text('profile_img')->nullable()->comment('Profile Image');
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
        Schema::dropIfExists('doctor_details');
    }
}
