<?php

namespace App\Http\Controllers;

use App\Models\Diklat;
use App\Models\Biodata;
use Illuminate\Http\Request;
use Auth;

class DiklatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->level == "user"){
            $getBiodata = Biodata::where('users_id',Auth::user()->id)->first();
            $dtDiklat = Diklat::where('nama_pegawai_id',$getBiodata->id)->get();
        }else{
            $dtDiklat = Diklat::all();
        }
        return view('Diklat.Data-diklat', compact('dtDiklat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtBiodata = Biodata::all();
        return view('Diklat.Create-diklat',compact('dtBiodata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtDiklat = new Diklat;
        $dtDiklat->nama_pegawai_id = $request->nama_pegawai_id;
        $dtDiklat->nip = $request->nip;
        $dtDiklat->jenis_diklat = $request->jenis_diklat;
        $dtDiklat->juklak_diklat = $request->juklak_diklat;
        $dtDiklat->tempat = $request->tempat;
        $dtDiklat->penyelenggara = $request->penyelenggara;
        $dtDiklat->jam_terlaksana = $request->jam_terlaksana;
        $dtDiklat->no_sertifikat = $request->no_sertifikat;
        $dtDiklat->save();

        return redirect('data-diklat')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function show(Diklat $diklat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtDiklat = Diklat::findorfail($id);
        $dtBiodata = Biodata::all();
        return view('Diklat.Edit-diklat', compact('dtDiklat','dtBiodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dtDiklat = Diklat::findorfail($id);
        $dtDiklat->update($request->all());

        return redirect('data-diklat')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Diklat  $diklat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtDiklat = Diklat::findorfail($id);
        $dtDiklat->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
