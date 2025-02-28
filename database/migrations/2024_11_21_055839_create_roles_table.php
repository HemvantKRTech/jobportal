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
        
            Schema::create('roles', function (Blueprint $table) {
                $table->id(); // Primary key
                $table->string('name'); // Role name
                $table->string('display_name')->nullable(); // Display name for the role
                $table->timestamps(); // Adds created_at and updated_at columns
            });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }
};
