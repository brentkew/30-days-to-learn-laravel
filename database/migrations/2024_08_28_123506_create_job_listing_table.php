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
            $table->string('location')->nullable(true); // Job location
            $table->string('experience')->nullable(true); // Required experience
            $table->string('company')->nullable(true); // Company name
            $table->string('type')->nullable(true); // Job type (Full-time, Part-time, etc.)
            $table->date('date_posted')->nullable(true); // Date when the job was posted
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
