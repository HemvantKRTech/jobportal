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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->increments('id'); // Equivalent to INT(11) NOT NULL AUTO_INCREMENT
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('logo', 255)->nullable();
            $table->string('favicon', 255)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('contact_no', 255)->nullable();
            $table->string('country', 200)->nullable();
            $table->string('state', 200)->nullable();
            $table->string('city', 200)->nullable();
            $table->text('address')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
