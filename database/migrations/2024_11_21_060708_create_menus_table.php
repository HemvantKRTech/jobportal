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
        Schema::create('menus', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('slug')->unique(); // Unique slug
            $table->string('name'); // Menu name
            $table->string('icon')->nullable(); // Icon for the menu, nullable
            $table->string('parent')->nullable(); // Parent menu ID
            $table->string('grand')->nullable(); // Grandparent menu ID
            $table->integer('ordering')->default(0); // Ordering position
            $table->enum('status', ['active', 'inactive'])->default('active'); // Status of the menu
            $table->timestamps(); // Adds created_at and updated_at columns
        });

        // Foreign key constraints for parent and grand (if referencing same table)
        // Schema::table('menus', function (Blueprint $table) {
        //     $table->foreign('parent')->references('id')->on('menus')->onDelete('cascade');
        //     $table->foreign('grand')->references('id')->on('menus')->onDelete('cascade');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('menus', function (Blueprint $table) {
        //     $table->dropForeign(['parent']);
        //     $table->dropForeign(['grand']);
        // });
        Schema::dropIfExists('menus');
    }
};
