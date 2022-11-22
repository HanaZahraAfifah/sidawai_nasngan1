<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use Illuminate\Http\Request;
use App\Models\JenisJabatan;
use App\Models\Jabatan; // ini dipake untuk getJabatan
use Auth; // dipake untuk auth user

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(Auth::user()->level == "user"){
            $dtBiodata = Biodata::where('users_id',Auth::user()->id)->first();
            return view('Biodata.Data-biodata', compact('dtBiodata'));
        }else{
            $pagination = 10;
            $dtBiodata = Biodata::paginate($pagination);
            return view('Biodata.Data-biodata', compact('dtBiodata'))->with('i', ($request->input('page',1)-1) * $pagination);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisJabatan = JenisJabatan::all();
        return view('Biodata.Create-biodata', compact('jenisJabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Biodata::create([
            'nama_pegawai' => $request->nama_pegawai,
            'nip' => $request->nip,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'alamat' => $request->alamat,
            'pendidikan' => $request->pendidikan,
            'pangkat_golongan' => $request->pangkat_golongan,
            'jabatan_id' => $request->jabatan_id,
            'users_id' => $request->users_id,
            'tmt_masuk' => $request->tmt_masuk,
            'tgl_pensiun' => $request->tgl_pensiun,
            'diklat_akhir' => $request->diklat_akhir,   
        ]);
            
        return redirect('data-biodata')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtBiodata = Biodata::findorfail($id);
        $dtJab = Jabatan::all();
        $dtJenJab = JenisJabatan::all();
        return view('Biodata.Edit-biodata', compact('dtBiodata','dtJab','dtJenJab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dtBiodata = Biodata::findorfail($id);
        $dtBiodata->update($request->all());

        return redirect('data-biodata')->with('toast_success', 'Data Berhasil Diubah!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtBiodata = Biodata::findorfail($id);
        $dtBiodata->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }

    public function getJabatan($id){
        $dtJab = Jabatan::where('jenis_jabatan_id', $id)->get();
        return response()->json($dtJab);
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $dtBiodata = Biodata::where('nama_pegawai', 'like', "%" . $keyword . "%")->paginate(10);
        return view('Biodata.Data-biodata', compact('dtBiodata'))->with('i', (request()->input('page', 1) - 1) * 10);
    }
}
