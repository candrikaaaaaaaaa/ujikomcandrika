<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\Dokter;
use App\Pasien;
use App\Poliklinik;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('backend.pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokter = Dokter::all();
        $pasien = Pasien::all();
        $poliklinik = Poliklinik::all();
        return view('backend.pendaftaran.create', compact('dokter', 'pasien','poloklinik'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendaftaran = new pendaftaran();
        $pendaftaran->No_pendaftaran = $request->No_pendaftaran;
        $pendaftaran->tanggal_pendaftaran = $request->tanggal_pendaftaran;
        $pendaftaran->kode_dokter = $request->kode_dokter;
        $pendaftaran->kode_pasien = $request->kode_pasien;
        $pendaftaran->kode_klinik = $request->kode_klinik;
        $pendaftaran->biaya = $request->biaya;
        $pendaftaran->keterangan = $request->keterangan;

        $pendaftaran->save();
    
        return redirect()->route('pendaftaran.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('pendaftaran.edit', compact('pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
