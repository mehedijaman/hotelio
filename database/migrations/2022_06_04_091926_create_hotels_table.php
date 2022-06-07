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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Title')->nullable();
            $table->string('Email')->nullable();
            $table->text('Address')->nullable();
            $table->string('Phone')->nullable();
            $table->string('RegNo')->nullable();
            $table->string('Logo',500)->nullable();
            $table->string('Photo',500)->nullable();
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
        Schema::dropIfExists('hotels');
    }
};
