<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    protected $table = "jabatan";
    protected $primaryKey = "id";
    protected $fillable = ['jenis_jabatan_id','nama_jabatan'];

    public function jenisjabatan(){
        return $this->belongsTo(JenisJabatan::class,'jenis_jabatan_id');
    }

}