<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kode_pasien')->unsigned();
            $table->foreign('kode_pasien')->references('id')->on('pasiens');
            $table->string('nama_pasien');
            $table->string('alamat_pasien');
            $table->string('gender_pasien');
            $table->string('umur');
            $table->bigInteger('tlp_pasien');
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
        Schema::dropIfExists('pasiens');
    }
}
