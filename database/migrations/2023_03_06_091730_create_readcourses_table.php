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
        Schema::create('readcourses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('Users_id')->constrained('Users')->cascadeOnDelete();
            $table->foreignId('lessences_id')->constrained('lessences')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('readcourses');
    }
};
