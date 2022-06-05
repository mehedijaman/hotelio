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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('HoteID');
            // $table->foreign('HotelID')->references('id')->on('hotels');
            $table->string('RoomNo')->nullable();
            $table->string('Floor')->nullable();
            $table->string('Type')->nullable();
            $table->boolean('Geyser')->nullable();
            $table->boolean('AC')->nullable();
            $table->boolean('Balcony')->nullable();
            $table->boolean('Bathtub')->nullable();
            $table->boolean('HiComode')->nullable();
            $table->boolean('Locker')->nullable();
            $table->boolean('Freeze')->nullable();
            $table->boolean('Internet')->nullable();
            $table->boolean('Intercom')->nullable();
            $table->boolean('TV')->nullable();
            $table->boolean('Wardrobe')->nullable();
            $table->decimal('Price')->nullable();
            $table->json('AdditionalFeatures')->nullable();
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
        Schema::dropIfExists('rooms');
    }
};
