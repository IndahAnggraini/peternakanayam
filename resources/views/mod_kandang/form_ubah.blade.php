@extends('layouts.app')
@section('konten')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Ubah Data</h5>
                        <form action="/kandang/{{ $data->id }}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Nama Kandang</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nm_kandang" value="{{ $data->nm_kandang }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Jumlah Ayam</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jml_ayam" value="{{ $data->jml_ayam }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Nama Karyawan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nm_karyawan" value="{{ $data->nm_karyawan }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Umur Ayam</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="umur_ayam" value="{{ $data->umur_ayam }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <div class="col-sm-12">
                                    <a href="/kandang"><button type="button" class="btn btn-secondary">Kembali</button></a>
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
