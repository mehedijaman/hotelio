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
            $table->unsignedBigInteger('GuestId');
            $table->foreign('GuestId')->references('id')->on('guests');
            $table->unsignedBigInteger('TaxId');
            $table->foreign('TextId')->references('id')->on('tax_settings');
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
