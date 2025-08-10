<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('informasi_umum', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('jumlah_penduduk')->default(0);
            $table->unsignedInteger('jumlah_keluarga')->default(0);
            $table->unsignedInteger('jumlah_laki_laki')->default(0);
            $table->unsignedInteger('jumlah_perempuan')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informasi_umum');
    }
};
