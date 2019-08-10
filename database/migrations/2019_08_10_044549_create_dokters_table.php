<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoktersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kode_dokter')->unsigned();
            $table->foreign('kode_dokter')->references('id')->on('dokters');
            $table->string('nama_dokter');
            $table->string('spesialis');
            $table->string('Alamat_dokter');
            $table->string('tlp_dokter');
            $table->bigInteger('kode_klinik')->unsigned();
            $table->foreign('kode_klinik')->references('id')->on('dokters');
            $table->bigInteger('Tarif');
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
        Schema::dropIfExists('dokters');
    }
}
