<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->dateTime('Date');
            $table->decimal('SubTotal');
            $table->decimal('TaxTotal');
            $table->decimal('Total');
            $table->string('PaymentMethod');
            $table->foreignId('GuestID');
            // $table->foreign('GuestID')->references('id')->on('guests');
            $table->foreignId('TaxID');
            // $table->foreign('TaxID')->references('id')->on('tax_settings');
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
        Schema::dropIfExists('invoices');
    }
};
