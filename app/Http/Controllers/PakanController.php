<?php

namespace App\Http\Controllers;

use App\Models\pakan;
use Illuminate\Http\Request;
use PDF;

class PakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = pakan::get();
        return view('mod_pakan.index', ['no'=>'1','tampildata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mod_pakan.form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new pakan();
        $data->stok_jagung = $request->stok_jagung;
        $data->stok_konsentrat = $request->stok_konsentrat;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('/pakan');
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
        $data = pakan::where('id', $id)->first();
        return view('mod_pakan.form_ubah', ['data'=>$data]);
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
        $data = pakan::where('id', $id)->first();
        $data->stok_jagung = $request->stok_jagung;
        $data->stok_konsentrat = $request->stok_konsentrat;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('/pakan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pakan::where('id', $id)->delete();
        return redirect('/pakan');
    }

    public function cetak()
    {
        $data = pakan::get();
        $pdf = PDF::loadView('mod_pakan.cetak', ['no'=>1, 'tampildata'=>$data]);
        return $pdf->stream();
    }
}
