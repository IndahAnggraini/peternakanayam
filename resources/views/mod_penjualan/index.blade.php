@extends('layouts.app')
@section('konten')
<div class="pagetitle">
    <h1>Penjualan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active">Penjualan</li>
      </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        DAFTAR PENJUALAN <a href="/penjualan/create"><button class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="tambah data" type="submit">
                            <i class="fa-solid fa-square-plus"></i></button></a>
                            <a href="/penjualan/cetak"><button class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="cetak data" type="submit">
                                <i class="fa-solid fa-print"></i></button></a></h5>

                        <table class="table table-bordered table-striped table-hover" id="table_id" class="display">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Nama Produk</td>
                                    <td>Tanggal Jual</td>
                                    <td>Jumlah Jual</td>
                                    <td>Harga </td>
                                    <td>Total</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($tampildata as $baris)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $baris->produk->nm_produk }}</td>
                                <td>{{ $baris->tgl_jual }} </td>
                                <td>{{ $baris->jml_jual }} </td>
                                <td>{{ $baris->harga }} </td>
                                <td>{{ $baris->total }} </td>
                                <td>
                                    <a href="/penjualan/{{ $baris->id }}/edit" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="ubah data">
                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="/penjualan/{{ $baris->id }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="hapus data" onclick="return confirm('apakah anda yakin menghapus data')">
                                            <i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
