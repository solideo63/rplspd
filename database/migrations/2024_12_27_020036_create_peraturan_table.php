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
        Schema::create('peraturan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 255); // Kolom tanya dengan panjang maksimum 255 karakter
            $table->string('deskripsi', 255); // Kolom jawab dengan panjang maksimum 255 karakter
            $table->string('link', 255); // Kolom jawab dengan panjang maksimum 255 karakter
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peraturan');
    }
};
