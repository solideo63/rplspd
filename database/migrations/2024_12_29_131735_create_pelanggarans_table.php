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
        Schema::create('pelanggarans', function (Blueprint $table) {
            $table->id(); // id dengan auto-increment
            $table->string('kodePelanggaran'); // string tidak boleh NULL, tanpa default
            $table->string('namaPelanggaran'); // string tidak boleh NULL, tanpa default
            $table->string('kategoriPelanggaran')->default(''); // string tidak boleh NULL, dengan default kosong
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggarans');
    }
};
