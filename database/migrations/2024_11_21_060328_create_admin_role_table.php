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
        Schema::create('admin_role', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('admin_id')->index(); // Foreign key to admins table
            $table->unsignedBigInteger('role_id')->index(); // Foreign key to roles table
            $table->timestamps(); // Adds created_at and updated_at columns
    
            // Foreign key constraints
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admin_role', function (Blueprint $table) {
            $table->dropForeign(['admin_id']);
            $table->dropForeign(['role_id']);
        });

        Schema::dropIfExists('admin_role');
    }
};
