<?php

namespace App\Http\Controllers;

use App\Models\Pensiun;
use Illuminate\Http\Request;

class PensiunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPensiun = Pensiun::all();
        return view('Pensiun.Data-pensiun', compact('dtPensiun'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pensiun.Create-pensiun');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pensiun::create([
            'nama_pegawai_id' => $request->nama_pegawai_id,
            'nip' => $request->nip,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_pensiun' => $request->tgl_pensiun,
            'usia' => $request->usia,
        ]);
        return redirect('data-pensiun')->with('toast_success', 'Data Berhasil Tersimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pensiun  $pensiun
     * @return \Illuminate\Http\Response
     */
    public function show(Pensiun $pensiun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pensiun  $pensiun
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dtPensiun = Pensiun::findorfail($id);
        return view('Pensiun.Edit-pensiun', compact('dtPensiun'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pensiun  $pensiun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dtPensiun = Pensiun::findorfail($id);
        $dtPensiun->update($request->all());

        return redirect('data-pensiun')->with('toast_success', 'Data Berhasil Diubah!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pensiun  $pensiun
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtPensiun = Pensiun::findorfail($id);
        $dtPensiun->delete();

        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
