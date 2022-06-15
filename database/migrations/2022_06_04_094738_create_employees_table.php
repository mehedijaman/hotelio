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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('HotelID');
            // $table->foreign('HotelID')->references('id')->on('hotels');
            $table->string('Name')->nullable();
            $table->string('Designation')->nullable();
            $table->date('DateOfBirth')->nullable();
            $table->string('NIDNo')->nullable();
            $table->string('NID',500)->nullable();
            $table->string('Phone')->nullable();
            $table->string('Email')->nullable();
            $table->text('Address')->nullable();
            $table->date('DateOfJoin')->nullable();
            $table->boolean('Status')->nullable();
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
        Schema::dropIfExists('employees');
    }
};
