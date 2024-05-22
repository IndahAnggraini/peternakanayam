<?php

namespace App\Http\Controllers;

use App\Models\ayam;
use App\Models\kandang;
use Illuminate\Http\Request;
use PDF;

class AyamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ayam::get();
        return view('mod_ayam.index', ['no'=>'1','tampildata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kandang = kandang::get();
        return view('mod_ayam.form_tambah', ['tampilkandang'=>$data_kandang]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jml_hidup = $request->jml_hidup;
        $jml_mati = $request->jml_mati;

        $total = $jml_hidup - $jml_mati;

        $data = new ayam;
        $data->kandang_id = $request->nm_kandang;
        $data->jml_hidup = $request->jml_hidup;
        $data->jml_mati = $request->jml_mati;
        $data->total = $total;
        $data->pakan = $request->pakan;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('/ayam');
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
        $data_kandang = kandang::get();
        $data = ayam::where('id', $id)->first();
        return view('mod_ayam.form_ubah', ['data'=>$data, 'tampilkandang'=>$data_kandang]);
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
        $data = ayam::where('id', $id)->first();

        $jml_hidup = $request->jml_hidup;
        $jml_mati = $request->jml_mati;

        $total = $jml_hidup - $jml_mati;

        $data->kandang_id = $request->nm_kandang;
        $data->jml_hidup = $jml_hidup;
        $data->jml_mati = $jml_mati;
        $data->total = $total;
        $data->pakan = $request->pakan;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('/ayam');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ayam::where('id', $id)->delete();
        return redirect('/ayam');
    }

    public function cetak()
    {
        $data = ayam::get();
        $pdf = PDF::loadView('mod_ayam.cetak', ['no'=>1, 'tampildata'=>$data]);
        return $pdf->stream();
    }
}
