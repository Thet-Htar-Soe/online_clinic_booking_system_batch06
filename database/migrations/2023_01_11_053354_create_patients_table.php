<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('id');
            $table->string('name')->comment('name');
            $table->string('email')->unique()->comment('email');
            $table->string('password')->comment('password');
            $table->string('phone')->comment('phone');
            $table->integer('age')->comment('age');
            $table->char('gender', 1)->comment('m:male, f:female, k:unknown, a:unapplicable');
            $table->text('address')->comment('address');
            $table->enum('blood_type', ['A','B', 'AB','O'])->nullable()->comment('blood_type');
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
        Schema::dropIfExists('patients');
    }
}
