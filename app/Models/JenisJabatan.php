<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisJabatan extends Model
{
    protected $table = "jenisjabatan";
    protected $primaryKey = "id";
    protected $fillable = ['jenis_jabatan'];
}
