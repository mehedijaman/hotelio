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
            $table->string('Email')->unique();
            $table->string('Address')->nullable();
            $table->string('Phone')->nullable();
            $table->string('RegNo')->nullable();
            $table->string('Logo')->nullable();
            $table->string('Photo')->nullable();
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
