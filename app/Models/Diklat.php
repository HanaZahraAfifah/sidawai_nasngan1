<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diklat extends Model
{
    protected $table = "diklat";
   // protected $primaryKey = "id";
    protected $fillable = ['nama_pegawai_id','nip','jenis_diklat','juklak_diklat','tempat','penyelenggara','jam_terlaksana','no_sertifikat'];
    
    public function biodata(){
        return $this->belongsTo(biodata::class, 'nama_pegawai_id');
    }
}