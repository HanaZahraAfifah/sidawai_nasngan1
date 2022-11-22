<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuti extends Model
{
    protected $table = "cuti";
    // protected $primaryKey = "id";
     protected $fillable = ['nama_pegawai_id','nip','jenis_cuti','tgl_mulai','tgl_akhir','lama_cuti'];
     
     public function biodata(){
         return $this->belongsTo(biodata::class, 'nama_pegawai_id');
     }

}