<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('toPunchTheClocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->date('clock-in');
            $table->date('clock-out');
        });

        Schema::create('toPunchTheClock_employee', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('toPunchTheClock_id');
            $table->foreign('toPunchTheClock_id')->references('id')->on('toPunchTheClocks');
            $table->unsignedBigInteger('employee_id');
            $table->foreign('employee_id')->references('id')->on('employees');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('toPunchTheClock_employee');
        Schema::dropIfExists('toPunchTheClock');
    }
};
