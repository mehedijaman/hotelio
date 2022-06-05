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
        Schema::create('room_transfers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('GuestId');
            $table->foreign('GuestId')->references('id')->on('guests');
            $table->number('FormRoomId')->nullable();
            $table->number('ToRoomId')->nullable();
            $table->dateTime('Date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('room_transfers');
    }
};
