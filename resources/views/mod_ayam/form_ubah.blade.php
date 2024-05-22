@extends('layouts.app')
@section('konten')
<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Form Ubah Data</h5>
                        <form action="/ayam/{{ $data->id }}" method="post">
                            @csrf
                            @method("PUT")
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Nama Kandang</label>
                                <div class="col-sm-10">
                                    <select name="nm_kandang" class="form-control">
                                        <option value={{ $data->kandang_id }} selected>{{ $data->kandang->nm_kandang }}</option>
                                        @foreach ($tampilkandang as $baris)
                                            @if ($baris->id != $data->kandang_id)
                                            <option value={{ $baris->id }}>{{ $baris->nm_kandang }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Jumlah Hidup</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jml_hidup" value="{{ $data->jml_hidup }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Jumlah Mati</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="jml_mati" value="{{ $data->jml_mati }}">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label class="col-sm-2 col-form-label">Pakan</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="pakan" value="{{ $data->pakan }}">
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
                                    <a href="/ayam"><button type="button" class="btn btn-secondary">Kembali</button></a>
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
