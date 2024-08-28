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
        Schema::create('job_listings', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignIdFor(\App\Models\Employer::class);
            $table->string('title'); // Job title
            $table->string('salary'); // Salary range
            $table->string('location'); // Job location
            $table->string('experience'); // Required experience
            $table->string('company'); // Company name
            $table->string('type'); // Job type (Full-time, Part-time, etc.)
            $table->date('date_posted'); // Date when the job was posted
            $table->timestamps(); // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_listings');
    }
};
