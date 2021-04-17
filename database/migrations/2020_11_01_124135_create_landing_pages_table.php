<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandingPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landing_pages', function (Blueprint $table) {
            $table->string('Logo');
            $table->string('Alamat');
            $table->string('Jam Kerja');
            $table->string('Keterangan Jargon');
            $table->string('Gambar Jargon');
            $table->string('Background Jargon');
            $table->string('Judul Ucapan');
            $table->string('Ucapan');
            $table->string('Tanda Tangan');
            $table->string('Nama Pemilik');
            $table->string('Layanan');
            $table->string('Paket Wisata');
            $table->string('Rental Mobil');
            $table->string('Sewa Homestay');
            $table->string('Galeri');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landing_pages');
    }
}
