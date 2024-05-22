<?php

namespace App\Http\Controllers;

use App\Models\produk;
use Illuminate\Http\Request;
use PDF;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = produk::get();
        return view('mod_produk.index', ['no'=>'1','tampildata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mod_produk.form_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new produk();
        $data->nm_produk = $request->nm_produk;
        $data->stok_masuk = $request->stok_masuk;
        $data->stok_keluar = $request->stok_keluar;
        $data->stok_gudang = $request->stok_gudang;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('/produk');
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
        $data = produk::where('id', $id)->first();
        return view('mod_produk.form_ubah', ['data'=>$data]);
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
        $data = produk::where('id', $id)->first();
        $data->nm_produk = $request->nm_produk;
        $data->stok_masuk = $request->stok_masuk;
        $data->stok_keluar = $request->stok_keluar;
        $data->stok_gudang = $request->stok_gudang;
        $data->tanggal = $request->tanggal;
        $data->save();
        return redirect('/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        produk::where('id', $id)->delete();
        return redirect('/produk');
    }

    public function cetak()
    {
        $data = produk::get();
        $pdf = PDF::loadView('mod_produk.cetak', ['no'=>1, 'tampildata'=>$data]);
        return $pdf->stream();
    }
}
