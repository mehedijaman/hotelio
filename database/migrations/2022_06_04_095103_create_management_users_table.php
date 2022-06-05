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
        Schema::create('management_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('EmployeeId');
            $table->foreign('EmployeeId')->references('id')->on('Employees');
            $table->string('Email');
            $table->string('Password');
            $table->string('LastLogin');
            $table->boolean('Status');
            $table->string('Roll');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('management_users');
    }
};
