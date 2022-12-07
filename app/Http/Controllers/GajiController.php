<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Biodata;
use Illuminate\Http\Request;
use Auth;
class GajiController extends Controller
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
            $dtGaji = Gaji::where('nama_pegawai_id',$getBiodata->id)->get();        
        }else{
            $dtGaji = Gaji::all();
        }
        return view('Gaji.Data-gaji', compact('dtGaji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtBiodata = Biodata::all();
        return view('Gaji.Create-gaji',compact('dtBiodata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = time().'.'.$request->sk_kgb->extension();
        $request->sk_kgb->move(public_path('sk_kgb'), $fileName);

        $dtGaji = new Gaji;
        $dtGaji->nama_pegawai_id = $request->nama_pegawai_id;
        $dtGaji->nip = $request->nip;
        $dtGaji->tmt = $request->tmt;
        $dtGaji->bulan = $request->bulan;
        $dtGaji->tahun = $request->tahun;
        $dtGaji->sk_kgb = $fileName;
        $dtGaji->save();
        
        return redirect('data-gaji')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtGaji = Gaji::findorfail($id);
        $dtBiodata = Biodata::all();
        return view('Gaji.Edit-gaji', compact('dtGaji','dtBiodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
    {
        if(Request()->hasFile('sk_kgb')) {
            $file = Request()->file('sk_kgb');
            $fileName = Request()->nip.'.'.$file->extension();//errornya di sini
            $file->move(public_path('sk_kgb'), $fileName);
        }

        $dtGaji = Gaji::findorfail($id);

        return redirect('data-gaji')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtGaji = Gaji::findorfail($id);
        $dtGaji->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}