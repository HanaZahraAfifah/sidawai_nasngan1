<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use App\Models\Diklat;
use App\Models\Gaji;
use App\Models\Cuti;

class HomeController extends Controller
{
    public function index(){
            $dtBiodata = Biodata::count();
            $dtDiklat = Diklat::count();
            $dtGaji = Gaji::count();
            $dtCuti = Cuti::count();
    
            return view('Home', compact('dtBiodata','dtDiklat','dtGaji','dtCuti'));
    }
}