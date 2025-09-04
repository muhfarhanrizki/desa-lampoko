<?php

// database/migrations/xxxx_xx_xx_add_status_to_pengaduans_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->enum('status', ['pending', 'diproses', 'ditolak'])
                  ->default('pending')
                  ->after('gambar');
        });
    }

    public function down(): void {
        Schema::table('pengaduans', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
