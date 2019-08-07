<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaliMuridTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wali_murid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_wali');
            $table->string('nisn_siswa');
            $table->string('wali_nama_ayah');
            $table->string('wali_pekerjaan_ayah');
            $table->string('wali_nama_ibu');
            $table->string('wali_pekerjaan_ibu');
            $table->string('alamat');
            $table->bigInteger('telepon');

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
        Schema::dropIfExists('wali_murid');
    }
}
