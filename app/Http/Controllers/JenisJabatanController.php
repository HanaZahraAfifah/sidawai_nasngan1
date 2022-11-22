<?php

namespace App\Http\Controllers;

use App\Models\JenisJabatan;
use Illuminate\Http\Request;

class JenisJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtJenJab = JenisJabatan::all();
        return view('JenisJabatan.Data-jenjab', compact('dtJenJab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('JenisJabatan.Create-jenjab');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisJabatan::create([
            'jenis_jabatan' => $request->jenis_jabatan,
        ]);
        return redirect('data-jenjab')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisJabatan  $jenisJabatan
     * @return \Illuminate\Http\Response
     */
    public function show(JenisJabatan $jenisJabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisJabatan  $jenisJabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtJenJab = JenisJabatan::findorfail($id);
        return view('JenisJabatan.Edit-jenjab', compact('dtJenJab'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisJabatan  $jenisJabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dtJenJab = JenisJabatan::findorfail($id);
        $dtJenJab->update($request->all());

        return redirect('data-jenjab')->with('toast_success', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisJabatan  $jenisJabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtJenJab = JenisJabatan::findorfail($id);
        $dtJenJab->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
