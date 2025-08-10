<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

        public function up()
        {
            Schema::table('pengumumen', function (Blueprint $table) {
                $table->date('tanggal')->nullable()->after('slug');
                $table->string('lokasi')->nullable()->after('tanggal');
            });
        }

        public function down()
        {
            Schema::table('pengumumen', function (Blueprint $table) {
                $table->dropColumn(['tanggal', 'lokasi']);
            });
        }

};
