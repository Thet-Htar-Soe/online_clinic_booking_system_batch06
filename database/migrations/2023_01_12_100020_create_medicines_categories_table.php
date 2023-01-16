<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines_categories', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('category_id')->comment('Category ID')->constrained()->onDelete('cascade');
            $table->foreignId('medicine_id')->comment('Medicine ID')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('medicines_categories');
    }
}
