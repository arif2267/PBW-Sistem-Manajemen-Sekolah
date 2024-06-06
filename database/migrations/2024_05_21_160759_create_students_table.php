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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('whatsapp');
            $table->string('formulir_pendaftaran');
            $table->string('fotocopy_nisn');
            $table->string('fotocopy_kk');
            $table->string('fotocopy_akte_kelahiran');
            $table->string('fotocopy_ktp_ortu');
            $table->string('pas_foto');
            $table->string('fotocopy_ijazah');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
