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
        Schema::create('data_pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat', 255);
            $table->string('noHp', 20); 
            $table->integer('total_berat');
            $table->string('jenis_paket'); 
            $table->integer('total_harga');
            $table->enum('status', ['Belum Selesai', 'Diproses', 'Selesai'])->default('Belum Selesai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_pesanans');
    }
};