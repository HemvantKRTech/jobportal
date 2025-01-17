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
        Schema::create('permissions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('menu_slug', 200)->nullable(); // menu_slug field with a maximum length of 200
            $table->string('permission_key', 200)->nullable(); // permission_key field with a maximum length of 200
            $table->timestamps(); // Created and updated timestamps

            // Add unique constraint on permission_key
            $table->unique('permission_key', 'key');
        });

        // Add foreign key to menu_slug if it references the menus table
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       
        Schema::dropIfExists('permissions');
    }
};
