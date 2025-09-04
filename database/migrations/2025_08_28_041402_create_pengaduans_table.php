<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   // database/migrations/xxxx_xx_xx_create_pengaduans_table.php
public function up(): void
{
    Schema::create('pengaduans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('email');
        $table->string('telepon');
        $table->enum('kategori', [
            'ekonomi',
            'infrastruktur',
            'keamanan',
            'kesehatan',
            'lingkungan',
            'pelayanan publik',
            'pendidikan',
            'lainnya'
        ]);
        $table->string('alamat');
        $table->string('judul');
        $table->text('deskripsi');
        $table->string('gambar')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
