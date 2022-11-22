<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $table = "gaji";
    // protected $primaryKey = "id";
     protected $fillable = ['nama_pegawai_id','nip','tmt','bulan','tahun'];
     
     public function biodata(){
         return $this->belongsTo(biodata::class, 'nama_pegawai_id');
        }
    }