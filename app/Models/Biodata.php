<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = "biodata";
    protected $primaryKey = "id";
    protected $fillable = ['nama_pegawai','nip','tmp_lahir','tgl_lahir','alamat','pendidikan','pangkat_golongan','jabatan_id','users_id','tmt_masuk','tgl_pensiun','diklat_akhir']; 

        public function jabatan(){
            return $this->belongsTo(Jabatan::class,'jabatan_id');
        }

        public function users(){
            return $this->belongsTo(User::class,'users_id');
        }
}