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
        Schema::create('penindakan_harian', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto-increment
            $table->string('nim', 9); // Kolom NIM dengan panjang maksimum 9 karakter
            // $table->string('nama_mahasiswa', 255); // Kolom NAS dengan panjang maksimum 8 karakter
            // $table->string('kelas', 255);
            // $table->integer('tingkat');
            $table->string('pelanggaran', 255); // Kolom Nama dengan panjang maksimum 255 karakter
            $table->string('nama_pencatat', 255); // Kolom Pelanggaran dengan panjang maksimum 255 karakter
            $table->string('tahun_akademik', 255);
            $table->string('status_pelanggaran', 255);
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penindakan_harian');
    }
};
