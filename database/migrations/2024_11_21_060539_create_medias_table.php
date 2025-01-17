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
        Schema::create('medias', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('file'); // File path or URL
            $table->string('icon')->nullable(); // Optional icon representing the file
            $table->string('name'); // Media name
            $table->string('slug')->unique(); // Unique slug for media
            $table->string('type'); // File type (e.g., image, video, document)
            $table->string('original_name'); // Original uploaded file name
            $table->string('size'); // File size in bytes
            $table->string('handle')->nullable(); // Optional handle for external storage
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medias');
    }
};
