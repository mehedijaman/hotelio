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
            $table->unsignedBigInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->string('roomNo')->nullable();
            $table->string('floor')->nullable();
            $table->string('type')->nullable();
            $table->boolean('geyser')->nullable();
            $table->boolean('ac')->nullable();
            $table->boolean('balcony')->nullable();
            $table->boolean('bathtub')->nullable();
            $table->boolean('hiComode')->nullable();
            $table->boolean('locker')->nullable();
            $table->boolean('freeze')->nullable();
            $table->boolean('internet')->nullable();
            $table->boolean('interCom')->nullable();
            $table->boolean('tv')->nullable();
            $table->boolean('wardrobe')->nullable();
            $table->decimal('price')->nullable();
            $table->boolean('status');
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
