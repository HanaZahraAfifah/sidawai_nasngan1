<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Diklat;
use App\Models\Gaji;
use App\Models\Cuti;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dtBiodata = Biodata::count();
        $dtDiklat = Diklat::count();
        $dtGaji = Gaji::count();
        $dtCuti = Cuti::count();

        $pegawaiASN = DB::table('biodata')
                        ->select('pendidikan', DB::raw('COUNT(id) as total'))
                        ->where('nip','!=','-')
                        ->groupBy('pendidikan')
                        ->get();
        $pegawaiNonASN = DB::table('biodata')
                        ->select('pendidikan', DB::raw('COUNT(id) as total'))
                        ->where('nip','-')
                        ->groupBy('pendidikan')
                        ->get();
        $jmlASN = Biodata::where('nip','!=','-')->count();
        $jmlNonASN = Biodata::where('nip','-')->count();
        $jmlLaki = Biodata::where('jenis_kelamin','Laki-laki')->count();
        $jmlPerempuan = Biodata::where('jenis_kelamin','Perempuan')->count();
        return view('Home', compact('dtBiodata','dtDiklat','dtGaji','dtCuti','pegawaiASN','pegawaiNonASN','jmlASN','jmlNonASN','jmlLaki','jmlPerempuan'));
    }
}