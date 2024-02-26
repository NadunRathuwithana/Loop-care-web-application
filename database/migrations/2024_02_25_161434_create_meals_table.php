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
        Schema::create('meals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('meal_time');
            $table->string('cover_image')->nullable();
            $table->string('effective_age')->nullable();
            $table->text('restricted_diseases')->nullable();
            $table->text('short_description')->nullable();
            $table->text('ingredients')->nullable();
            $table->string('serving_size')->nullable();
            $table->string('total_calories')->nullable();
            $table->string('total_fat')->nullable();
            $table->string('total_sugar')->nullable();
            $table->string('total_protein')->nullable();
            $table->string('total_carbohydrate')->nullable();
            $table->text('making_instructions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meals');
    }
};
