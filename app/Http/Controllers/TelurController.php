<?php

namespace App\Http\Controllers;

use App\Models\kandang;
use App\Models\telur;
use Illuminate\Http\Request;
use PDF;

class TelurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = telur::get();
        return view('mod_telur.index', ['no'=>'1','tampildata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kandang = kandang::get();
        return view('mod_telur.form_tambah', ['tampilkandang'=>$data_kandang]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jml_bagus = $request->jml_bagus;
        $jml_retak = $request->jml_retak;

        $total = $jml_bagus + $jml_retak;

        $data = new telur();
        $data->kandang_id = $request->nm_kandang;
        $data->jml_bagus = $request->jml_bagus;
        $data->jml_retak = $request->jml_retak;
        $data->total = $total;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('/telur');
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
        $data = telur::where('id', $id)->first();
        return view('mod_telur.form_ubah', ['data'=>$data, 'tampilkandang'=>$data_kandang]);
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
        $data = telur::where('id', $id)->first();

        $jml_bagus = $request->jml_bagus;
        $jml_retak = $request->jml_retak;

        $total = $jml_bagus + $jml_retak;

        $data->kandang_id = $request->nm_kandang;
        $data->jml_bagus = $jml_bagus;
        $data->jml_retak = $jml_retak;
        $data->total = $total;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('/telur');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        telur::where('id', $id)->delete();
        return redirect('/telur');
    }

    public function cetak()
    {
        $data = telur::get();
        $pdf = PDF::loadView('mod_telur.cetak', ['no'=>1, 'tampildata'=>$data]);
        return $pdf->stream();
    }
}
