@extends('layouts.app')
@section('konten')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Ubah Data</h5>
                        <form action="/produk/{{ $data->id }}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Nama Produk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nm_produk" value="{{ $data->nm_produk }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Stok Masuk</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="stok_masuk" value="{{ $data->stok_masuk }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Stok Keluar</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="stok_keluar" value="{{ $data->stok_keluar }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Stok Gudang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="stok_gudang" value="{{ $data->stok_gudang }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Tanggal</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="tanggal" value="{{ $data->tanggal }}">
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
