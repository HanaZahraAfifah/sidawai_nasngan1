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
        return view('Home', compact('dtBiodata','dtDiklat','dtGaji','dtCuti','pegawaiASN','pegawaiNonASN'));
    }
}