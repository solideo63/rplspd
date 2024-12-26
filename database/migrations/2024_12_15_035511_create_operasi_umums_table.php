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
        Schema::create('operasi_umums', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto-increment
            $table->string('nim', 9); // Kolom NIM dengan panjang maksimum 9 karakter
            $table->string('name', 255); // Kolom Nama dengan panjang maksimum 255 karakter
            $table->string('tingkat', 255); // Kolom Tindakan dengan panjang
            $table->string('violation', 255); // Kolom Pelanggaran dengan panjang maksimum 255 karakter
            $table->string('nas', 8); // Kolom NAS dengan panjang maksimum 8 karakter
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operasi_umums');
    }
};
