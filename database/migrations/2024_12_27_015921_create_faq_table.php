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
        Schema::create('faq', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto-increment
            $table->string('tanya', 255); // Kolom tanya dengan panjang maksimum 255 karakter
            $table->string('jawab', 255); // Kolom jawab dengan panjang maksimum 255 karakter
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faq');
    }
};
