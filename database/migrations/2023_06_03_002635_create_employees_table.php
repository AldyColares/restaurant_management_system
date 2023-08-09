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
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admin_users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email', 250)->unique();
            $table->string('password');
            $table->float('salary', 10, 2);
            $table->string('position');
            $table->string('city');
            $table->string('street');
            $table->integer('number');
            $table->string('phone');
            $table->string('role');
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
