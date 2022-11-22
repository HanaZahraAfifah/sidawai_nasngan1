<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pensiun extends Model
{
    protected $table = "pensiun";
   // protected $primaryKey = "id";
    protected $fillable = ['nama_pegawai_id','nip','tgl_lahir','tgl_pensiun','usia'];
    
    public function biodata(){
        return $this->belongsTo(biodata::class, 'nama_pegawai_id');
    }
}