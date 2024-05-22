@extends('layouts.app')
@section('konten')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Tambah Data</h5>
                        <form action="/produk" method="post">
                            @csrf
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nm_produk">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Stok Produk Masuk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="stok_masuk">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Stok Produk Keluar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="stok_keluar">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Stok Produk Gudang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="stok_gudang">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <a href="/produk"><button type="button" class="btn btn-secondary">Kembali</button></a>
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
