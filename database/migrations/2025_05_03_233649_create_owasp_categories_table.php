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
        Schema::create('owasp_categories', function (Blueprint $table) {
            $table->id();
            $table->string('code'); // e.g., "A01:2021"
            $table->string('name'); // e.g., "Broken Access Control"
            $table->text('description');
            $table->string('version'); // e.g., "2021"
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('owasp_categories');
    }
};
