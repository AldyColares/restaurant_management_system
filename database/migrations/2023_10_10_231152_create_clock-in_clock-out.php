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
        Schema::create('clock-in_clock-out', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreign('employee_id')->references('id')->on('employee');
            $table->date('clock-in');
            $table->date('clock-out');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clock-in_clock-out');
    }
};
