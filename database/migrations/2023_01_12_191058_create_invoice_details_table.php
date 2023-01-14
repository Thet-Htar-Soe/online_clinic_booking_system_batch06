<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->foreignId('invoice_id')->comment("Invoice ID")->constrained()->onDelete('cascade');
            $table->json('medicines')->comment('Medicines');
            $table->integer('doctor_charges')->nullable()->comment('Doctor Charges');
            $table->integer('grand_total')->comment('Grand Total');
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
        Schema::dropIfExists('invoice_details');
    }
}
