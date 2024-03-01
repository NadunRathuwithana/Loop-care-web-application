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
        Schema::create('goals', function (Blueprint $table) {
            $table->id();
            $table->string('goal_name')->nullable();
            $table->string('category')->nullable();
            $table->string('goal_time')->nullable();
            $table->string('goal_calories')->nullable();
            $table->string('goal_difficulty')->nullable();
            $table->string('goal_image')->nullable();
            $table->string('short_description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goals');
    }
};
