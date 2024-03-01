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
        Schema::create('meal_management', function (Blueprint $table) {
            $table->id();
            $table->string('meal_name');
            $table->string('category');
            $table->string('meal_time');
            $table->string('meal_image')->nullable();
            $table->string('short_description');
            $table->string('ingredient');
            $table->string('serving_size');
            $table->string('calories');
            $table->string('fat');
            $table->string('sugar');
            $table->string('protein');
            $table->string('carbohydrate');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_management');
    }
};
