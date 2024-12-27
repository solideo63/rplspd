<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOperasiRutinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operasi_rutin', function (Blueprint $table) {
            $table->id(); // Primary key dengan auto-increment
            $table->string('nim', 9); // Kolom NIM dengan panjang maksimum 9 karakter
            $table->string('nama_mahasiswa', 255); // Kolom NAS dengan panjang maksimum 8 karakter
            $table->string('pelanggaran', 255); // Kolom Nama dengan panjang maksimum 255 karakter
            $table->string('nama_pencatat', 255); // Kolom Pelanggaran dengan panjang maksimum 255 karakter
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operasi_rutin');
    }
}


