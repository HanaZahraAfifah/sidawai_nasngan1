<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuti', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nama_pegawai_id')->unsigned();
            $table->string('nip');
            $table->text('jenis_cuti');
            $table->date('tgl_mulai');
            $table->date('tgl_akhir');
            $table->string('lama_cuti');
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
        Schema::dropIfExists('cuti');
    }
}