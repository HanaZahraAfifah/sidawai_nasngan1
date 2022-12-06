<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata', function (Blueprint $table) {
            $table->id();
            $table->text('nama_pegawai');
            $table->string('nip');
            $table->text('tmp_lahir');
            $table->date('tgl_lahir');
            $table->text('jenis_kelamin');
            $table->string('alamat');
            $table->string('pendidikan');
            $table->text('pangkat_golongan');
            $table->bigInteger('jabatan_id')->unsigned();
            $table->bigInteger('users_id')->unsigned();
            $table->integer('tmt_masuk');
            $table->date('tgl_pensiun');
            $table->string('diklat_akhir');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('jabatan_id')->references('id')->on('jabatan')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata');
        $table->dropColumn('nama_pegawai');
    }
}
