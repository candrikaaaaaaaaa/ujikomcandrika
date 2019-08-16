<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftaran;
use App\Dokter;
use App\Pasien;
use App\Poliklinik;

class PoliklinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poliklinik = Poliklinik::all();
        return view('backend.poliklinik.index', compact('poliklinik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poliklinik = new Poliklinik();
        $poliklinik->kode_klinik = $request->kode_klinik;
        $poliklinik->nama_klinik = $request->nama_klinik;

        $poliklinik->save();
    
        return redirect()->route('poliklinik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poliklinik = Poliklinik::findOrFail($id);
        return view('poliklinik.show', compact('poliklinik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poliklinik = Poliklinik::findOrFail($id);
        return view('backend.poliklinik.edit', compact('poliklinik'));
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
        $poliklinik = Poliklinik::findOrFail();
        $poliklinik->kode_klinik = $request->kode_klinik;
        $poliklinik->nama_klinik = $request->nama_klinik;

        $poliklinik->save();
    
        return redirect()->route('poliklinik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poliklinik = Poliklinik::findOrFail($id);
        $poliklinik->delete();
        return redirect()->route('poliklinik.index');
    }
}
