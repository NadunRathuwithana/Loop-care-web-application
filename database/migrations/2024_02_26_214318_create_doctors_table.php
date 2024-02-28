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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('userId')->nullable();
            $table->string('doctorFName')->nullable();
            $table->string('doctorLName')->nullable();
            $table->string('email')->nullable();
            $table->string('sex')->nullable();
            $table->string('district')->nullable();
            $table->string('workHospital')->nullable();
            $table->string('workExperience')->nullable();
            $table->string('docRegNo')->nullable();
            $table->string('medicalLicense')->nullable();
            $table->boolean('isActive')->default('1')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
