<?php

namespace App\Http\Controllers;

use App\Models\kandang;
use Illuminate\Http\Request;
use PDF;

class KandangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kandang::get();
        return view('mod_kandang.index', ['no'=>'1','tampildata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mod_kandang.form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new kandang;
        $data->nm_kandang = $request->nm_kandang;
        $data->jml_ayam = $request->jml_ayam;
        $data->nm_karyawan = $request->nm_karyawan;
        $data->umur_ayam = $request->umur_ayam;
        $data->save();
        return redirect('/kandang');
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
        $data = kandang::where('id', $id)->first();
        return view('mod_kandang.form_ubah', ['data'=>$data]);
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
        $data = kandang::where('id', $id)->first();
        $data->nm_kandang = $request->nm_kandang;
        $data->jml_ayam = $request->jml_ayam;
        $data->nm_karyawan = $request->nm_karyawan;
        $data->umur_ayam = $request->umur_ayam;
        $data->save();
        return redirect('/kandang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kandang::where('id', $id)->delete();
        return redirect('/kandang');
    }

    public function cetak()
    {
        $data = kandang::get();
        $pdf = PDF::loadView('mod_kandang.cetak', ['no'=>1, 'tampildata'=>$data]);
        return $pdf->stream();
    }
}
