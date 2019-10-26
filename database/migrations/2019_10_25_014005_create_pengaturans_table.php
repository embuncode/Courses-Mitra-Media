<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaturansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_home');
            $table->string('name_profil');
            $table->string('gambar_home');
            $table->string('gambar_profil');
            $table->mediumtext('deskripsi');
            $table->mediumtext('visi');
            $table->mediumtext('misi');
            $table->mediumtext('keunggulan');
            $table->mediumtext('sambutan');
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
        Schema::dropIfExists('pengaturans');
    }
}
