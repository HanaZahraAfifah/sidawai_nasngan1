<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiklat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diklat', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nama_pegawai_id')->unsigned();
            $table->string('nip');
            $table->text('jenis_diklat');
            $table->text('juklak_diklat');
            $table->text('tempat');
            $table->text('penyelenggara');
            $table->string('jam_terlaksana');
            $table->string('no_sertifikat');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign('nama_pegawai_id')->references('id')->on('biodata')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diklat');
    }
}