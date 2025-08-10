<?php

// database/migrations/xxxx_xx_xx_create_surats_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('surats', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama jenis surat
            $table->string('slug')->unique();
            $table->string('link'); // Link ke Google Form
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('surats');
    }
};
