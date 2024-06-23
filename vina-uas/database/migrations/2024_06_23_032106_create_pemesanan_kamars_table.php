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
        Schema::create('pemesanan_kamars', function (Blueprint $table) {
            $table->bigincrements('id_pemesanan');
            $table->bigInteger('id_pasien');
            $table->bigincrements('id_kamar');
            $table->date('tgl_pasien_masuk')->nillabel();
            $table->date('tgl_pasien_keluar')->nillabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_kamars');
    }
};
