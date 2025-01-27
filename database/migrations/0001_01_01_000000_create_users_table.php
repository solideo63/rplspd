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
        Schema::create('autentikasis', function (Blueprint $table) {
            // $table->id('auth_id'); // Primary Key
            // $table->string('username'); // ID pengguna dari tabel admin, spd, atau pemonitor
            // $table->string('password'); // Password terenkripsi
            // $table->enum('role', ['spd', 'admin', 'pemonitor']); // Role pengguna
            // $table->timestamps(); // created_at dan updated_at
            $table->id();
            // $table->string('name');
            $table->string('username')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['spd', 'admin', 'pemonitor']);
            // $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autentikasis');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
