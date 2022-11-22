<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Biodata;
use Illuminate\Http\Request;
use Auth;

class CutiController extends Controller
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
            $dtCuti = Cuti::where('nama_pegawai_id',$getBiodata->id)->paginate($pagination);
        }else{
            $dtCuti = Cuti::paginate($pagination);
        }
        return view('Cuti.Data-cuti', compact('dtCuti'))->with('i', ($request->input('page',1)-1) * $pagination);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtBiodata = Biodata::all();
        return view('Cuti.Create-cuti',compact('dtBiodata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $dtCuti = new Cuti;
            $dtCuti->nama_pegawai_id = $request->nama_pegawai_id;
            $dtCuti->nip = $request->nip;
            $dtCuti->jenis_cuti = $request->jenis_cuti;
            $dtCuti->tgl_mulai = $request->tgl_mulai;
            $dtCuti->tgl_akhir = $request->tgl_akhir;
            $dtCuti->lama_cuti = $request->lama_cuti;
            $dtCuti->save();
        
        return redirect('data-cuti')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function show(Cuti $cuti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtCuti = Cuti::findorfail($id);
        $dtBiodata = Biodata::all();
        return view('Cuti.Edit-cuti', compact('dtCuti','dtBiodata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dtCuti = Cuti::findorfail($id);
        $dtCuti->update($request->all());

        return redirect('data-cuti')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuti  $cuti
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtCuti = Cuti::findorfail($id);
        $dtCuti->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
    /**public function search(Request $request)
    {
        $keyword = $request->search;
        $dtCuti = Cuti::where('nama_pegawai_id', 'like', "%" . $keyword . "%")->paginate(10);
        return view('Cuti.Data-cuti', compact('dtCuti'))->with('i', (request()->input('page', 1) - 1) * 10);
    }*/
}
