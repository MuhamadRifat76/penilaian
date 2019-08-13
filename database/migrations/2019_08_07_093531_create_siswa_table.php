<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('NISN')->unique();
            $table->unsignedBigInteger('kompetensi_id');
            $table->string('nama');
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->string('foto')->nullable();
            $table->foreign('kompetensi_id')->references('id')->on('kompetensi_keahlian');
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
        Schema::dropIfExists('siswa');
    }
}
