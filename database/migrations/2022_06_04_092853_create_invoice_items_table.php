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
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('InvoiceID');
            // $table->foreign('InvoiceID')->references('id')->on('invoices');
            $table->string('Name')->nullable();
            $table->text('Description')->nullable();
            $table->bigInteger('Qty')->nullable();
            $table->decimal('UnitPrice')->nullable();
            $table->decimal('Price')->nullable();
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
        Schema::dropIfExists('invoice_items');
    }
};
