<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 100);
            $table->string('nis');
            $table->string('email')->unique();
            $table->string('no_telepon');
            $table->string('tmpt_lahir');
            $table->date('tgl_lahir');
            $table->string('agama');
            $table->string('picture');
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->string('alamat', 255);
            $table->string('testimoni', 100);
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
        Schema::dropIfExists('alumnis');
    }
}
