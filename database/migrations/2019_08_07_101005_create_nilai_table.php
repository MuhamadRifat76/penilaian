<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNilaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('siswa_nisn');
            $table->string('guru_kode');
            $table->string('sk_kode');
            $table->bigInteger('nilai_angka');
            $table->string('nilai_huruf');
            $table->foreign('siswa_id')->references('id')->on('siswas');
            $table->foreign('guru_id')->references('id')->on('gurus');
            $table->foreign('sk_id')->references('id')->on('standar_kompetensis');
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
        Schema::dropIfExists('nilai');
    }
}
