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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('role_id')->index(); // Foreign key to roles table
            $table->string('name'); // Admin name
            $table->string('email')->unique(); // Admin email, unique constraint
            $table->string('mobile', 15)->nullable(); // Mobile number, nullable
            $table->string('password'); // Admin password
            $table->string('remember_token', 100)->nullable(); // For "remember me" functionality
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the admin
            $table->string('avatar')->nullable(); // Profile picture
            $table->string('cover_photo')->nullable(); // Cover photo
            $table->enum('gender', ['male', 'female', 'other'])->nullable(); // Gender
            $table->date('date_of_birth')->nullable(); // Date of birth
            $table->timestamps(); // Adds created_at and updated_at columns
            $table->softDeletes(); // Adds deleted_at column for soft deletes
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
