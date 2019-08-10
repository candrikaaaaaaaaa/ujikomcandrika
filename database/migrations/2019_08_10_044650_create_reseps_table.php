<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reseps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('No_resep');
            $table->date('tanggal_resep');
            $table->bigInteger('kode_dokter')->unsigned();
            $table->foreign('kode_dokter')->references('id')->on('reseps');
            $table->bigInteger('kode_pasien')->unsigned();
            $table->foreign('kode_pasien')->references('id')->on('reseps');
            $table->bigInteger('kode_klinik')->unsigned();
            $table->foreign('kode_klinik')->references('id')->on('reseps');
            $table->bigInteger('total_harga');
            $table->bigInteger('Bayar');
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
        Schema::dropIfExists('reseps');
    }
}
