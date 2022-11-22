<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\JenisJabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtJab = Jabatan::all();
        return view('Jabatan.Data-jabatan', compact('dtJab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dtJenJab = JenisJabatan::all();
        return view('Jabatan.Create-jabatan',compact('dtJenJab'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtJab = new Jabatan;
        $dtJab->jenis_jabatan_id = $request->jenis_jabatan_id;
        $dtJab->nama_jabatan = $request->nama_jabatan;
        $dtJab->save ();


        return redirect('data-jabatan')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show(Jabatan $jabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtJab = Jabatan::findorfail($id);
        return view('Jabatan.Edit-jabatan', compact('dtJab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dtJab = Jabatan::findorfail($id);
        $dtJab->update($request->all());

        return redirect('data-jabatan')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtJab = Jabatan::findorfail($id);
        $dtJab->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
