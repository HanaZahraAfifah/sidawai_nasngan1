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
        $pagination = 10;
        if(Auth::user()->level == "user"){
            $getBiodata = Biodata::where('users_id',Auth::user()->id)->first();
            $dtGaji = Gaji::where('nama_pegawai_id',$getBiodata->id)->paginate($pagination);        
        }else{
            $dtGaji = Gaji::paginate($pagination);
        }
        return view('Gaji.Data-gaji', compact('dtGaji'))->with('i', ($request->input('page',1)-1) * $pagination);
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
        $dtGaji = new Gaji;
        $dtGaji->nama_pegawai_id = $request->nama_pegawai_id;
        $dtGaji->nip = $request->nip;
        $dtGaji->tmt = $request->tmt;
        $dtGaji->bulan = $request->bulan;
        $dtGaji->tahun = $request->tahun;
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
        $dtGaji = Gaji::findorfail($id);
        $dtGaji->update($request->all());

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
    /**public function search(Request $request)
    {
        $keyword = $request->search;
        $dtGaji = Gaji::where('nama_pegawai_id', 'like', "%" . $keyword . "%")->paginate(10);
        return view('Gaji.Data-gaji', compact('dtGaji'))->with('i', (request()->input('page', 1) - 1) * 10);
    }*/
}