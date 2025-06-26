<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Users Table (Auth)
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['user', 'admin', 'mitra'])->default('user');
            $table->rememberToken();
            $table->timestamps();
        });

        // Applicants Table
        Schema::dropIfExists('applicants');
        Schema::create('applicants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete();
            $table->json('personal_info'); // Nama, alamat, dll
            $table->json('education_history');
            $table->json('work_experience')->nullable();
            $table->enum('status', ['draft', 'pending', 'approved', 'rejected'])->default('draft');
            $table->timestamps();
        });

        // Job Listings Table
        Schema::dropIfExists('job_listings');
        Schema::create('job_listings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title');
            $table->text('description');
            $table->string('location'); // Jepang/Korea
            $table->decimal('salary', 10, 2);
            $table->enum('employment_type', ['full_time', 'part_time', 'contract']);
            $table->timestamps();
        });

        // Training Programs
        Schema::dropIfExists('trainings');
        Schema::create('trainings', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->enum('type', ['language', 'technical', 'culture']);
            $table->text('description');
            $table->integer('duration_days');
            $table->timestamps();
        });

        // Many-to-Many: Users <-> Trainings
        Schema::dropIfExists('training_user');
        Schema::create('training_user', function (Blueprint $table) {
            $table->foreignUuid('user_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('training_id')->constrained()->cascadeOnDelete();
            $table->primary(['user_id', 'training_id']);
            $table->enum('status', ['registered', 'completed'])->default('registered');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('training_user');
        Schema::dropIfExists('trainings');
        Schema::dropIfExists('job_listings');
        Schema::dropIfExists('applicants');
        Schema::dropIfExists('users');
    }
};