<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nama_pegawai_id')->unsigned();
            $table->string('nip');
            $table->text('tmt');
            $table->text('bulan');
            $table->integer('tahun');
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
        Schema::dropIfExists('gaji');
    }
}
