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
        Schema::create('dishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->float('price', 10, 2);
            $table->timestamps();
        });

        Schema::create('ingredients_dishes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dishes_id');
            $table->foreign('dishes_id')->references('id')->on('dishes');
            $table->unsignedBigInteger('products_inventory_id');
            $table->foreign('products_inventory_id')->references('id')->on('products_inventory');

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
        Schema::dropIfExists('products_inventory');

    }
};
