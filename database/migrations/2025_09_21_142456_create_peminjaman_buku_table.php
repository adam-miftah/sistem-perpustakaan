<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('peminjaman_buku', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buku_id')->constrained('buku')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali'); // wajib ada
            $table->enum('status', ['dipinjam','dikembalikan'])->default('dipinjam');
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('peminjaman_buku');
    }
};
