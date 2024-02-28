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
        Schema::create('trainers', function (Blueprint $table) {
            $table->id();
            $table->string('userId')->nullable();
            $table->string('trainerFName')->nullable();
            $table->string('trainerLName')->nullable();
            $table->string('email')->nullable();
            $table->string('sex')->nullable();
            $table->string('district')->nullable();
            $table->string('gymUnit')->nullable();
            $table->string('workExperience')->nullable();
            $table->string('regNo')->nullable();
            $table->string('trainingLicense')->nullable();
            $table->boolean('isActive')->default('1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainers');
    }
};
