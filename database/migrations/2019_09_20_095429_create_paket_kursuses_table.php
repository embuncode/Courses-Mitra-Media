<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketKursusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kursuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul_kursus');
            $table->string('tujuan');
            $table->integer('pengajar_id');
            $table->text('materi');
            $table->string('total_kursi');
            $table->string('jumlah_siswa');
            $table->string('biaya');
            $table->time('mulai_jam');
            $table->time('selesai_jam');
            $table->string('masa_kursus');
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_kursuses');
    }
}
