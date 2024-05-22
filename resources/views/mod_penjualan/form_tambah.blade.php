@extends('layouts.app')
@section('konten')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Tambah Data</h5>
                        <form action="/penjualan" method="post">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <select name="nm_produk" class="form-control">
                                        @foreach ($tampilproduk as $baris)
                                            <option value={{ $baris->id }}>{{ $baris->nm_produk }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Tanggal Jual</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tgl_jual">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Jumlah Jual</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jml_jual">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Harga</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="harga">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <a href="/penjualan"><button type="button" class="btn btn-secondary">Kembali</button></a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
