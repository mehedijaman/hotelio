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
            $table->unsignedBigInteger('HotelId');
            $table->foreign('HotelId')->references('id')->on('hotels');
            $table->string('RoomNo')->nullable();
            $table->string('Floor')->nullable();
            $table->string('Type')->nullable();
            $table->boolean('Geyser')->nullable();
            $table->boolean('Ac')->nullable();
            $table->boolean('Balcony')->nullable();
            $table->boolean('Bathtub')->nullable();
            $table->boolean('HiComode')->nullable();
            $table->boolean('Locker')->nullable();
            $table->boolean('Freeze')->nullable();
            $table->boolean('Internet')->nullable();
            $table->boolean('InterCom')->nullable();
            $table->boolean('Tv')->nullable();
            $table->boolean('Wardrobe')->nullable();
            $table->decimal('Price')->nullable();
            $table->boolean('Status');
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
