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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('RoomID');
            // $table->foreign('RoomID')->references('id')->on('rooms');
            $table->foreignId('GuestID');
            // $table->foreign('GuestID')->references('id')->on('guests');
            $table->dateTime('CheckInDate')->nullable();
            $table->dateTime('CheckOutDate')->nullable();
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
};
