<?php

namespace App\Http\Controllers;

use App\Models\penjualan;
use App\Models\produk;
use Illuminate\Http\Request;
use PDF;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = penjualan::get();
        return view('mod_penjualan.index', ['no'=>'1','tampildata'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_produk = produk::get();
        return view('mod_penjualan.form_tambah', ['tampilproduk'=>$data_produk]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Mengambil nilai jumlah jual dan harga dari request
        $jml_jual = $request->jml_jual;
        $harga = $request->harga;

        // Menghitung total
        $total = $jml_jual * $harga;

        $data = new penjualan();
        $data->produk_id = $request->nm_produk;
        $data->tgl_jual = $request->tgl_jual;
        $data->jml_jual = $request->jml_jual;
        $data->harga = $harga; // Simpan harga dari request
        $data->total = $total; // Simpan total yang telah dihitung
        $data->save();
        return redirect('/penjualan');
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
        $data_produk = produk::get();
        $data = penjualan::where('id', $id)->first();
        return view('mod_penjualan.form_ubah', ['data'=>$data, 'tampilproduk'=>$data_produk]);
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
        // Mengambil data penjualan yang akan diupdate
        $data = penjualan::where('id', $id)->first();

        // Mengambil nilai jumlah jual dan harga dari request
        $jml_jual = $request->jml_jual;
        $harga = $request->harga;

        // Menghitung total
        $total = $jml_jual * $harga;

        // Update data penjualan
        $data->produk_id = $request->nm_produk;
        $data->tgl_jual = $request->tgl_jual;
        $data->jml_jual = $jml_jual;
        $data->harga = $harga;
        $data->total = $total;
        $data->save();
        return redirect('/penjualan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        penjualan::where('id', $id)->delete();
        return redirect('/penjualan');
    }

    public function cetak()
    {
        $data = penjualan::get();
        $pdf = PDF::loadView('mod_penjualan.cetak', ['no'=>1, 'tampildata'=>$data]);
        return $pdf->stream();
    }
}
