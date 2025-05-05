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
        Schema::create('vulnerabilities', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('severity', ['Critical', 'High', 'Medium', 'Low', 'Info']);
            $table->enum('status', ['Open', 'In Progress', 'Fixed', 'False Positive']);
            $table->foreignId('owasp_category_id')->constrained('owasp_categories');
            $table->string('reported_by_name');
            $table->string('reported_by_email');
            $table->string('assigned_to_name');
            $table->string('assigned_to_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vulnerabilities');
    }
};
