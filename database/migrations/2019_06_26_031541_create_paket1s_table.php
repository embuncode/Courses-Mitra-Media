<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaket1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket1s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('tujuan');
            $table->text('materi');
            $table->time('mulai_jam');
            $table->time('selesai_jam');
            $table->string('masa_kursus');
            $table->string('picture');
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
        Schema::dropIfExists('paket1s');
    }
}
