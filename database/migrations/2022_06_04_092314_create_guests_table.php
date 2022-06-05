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
        Schema::create('guests', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->string('Email')->unique();
            $table->string('Address')->nullable();
            $table->string('Phone')->nullable();
            $table->string('NidNo')->nullable();
            $table->string('Nid')->nullable();
            $table->string('PassportNo')->nullable();
            $table->string('Passport')->nullable();
            $table->string('Father')->nullable();
            $table->string('Photo')->nullable();
            $table->string('Spouse');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
};
