<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kritik_sarans', function (Blueprint $table) {
            $table->id();
            $table->text('isi_kritik_saran');
            $table->timestamp('waktu')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kritik_sarans');
    }
};
