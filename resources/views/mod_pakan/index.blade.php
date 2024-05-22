@extends('layouts.app')
@section('konten')
<div class="pagetitle">
    <h1>Pakan</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Beranda</a></li>
        <li class="breadcrumb-item active">Pakan</li>
      </ol>
    </nav>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                    DAFTAR PAKAN <a href="/pakan/create"><button class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="tambah data" type="submit">
                        <i class="fa-solid fa-square-plus"></i></button></a>
                        <a href="/pakan/cetak"><button class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="cetak data" type="submit">
                            <i class="fa-solid fa-print"></i></button></a></h5>

                    <table class="table table-bordered table-striped table-hover" id="table_id" class="display">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Stok Jagung</td>
                                <td>Stok Konsentrat</td>
                                <td>Tanggal</td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($tampildata as $baris)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $baris->stok_jagung }} </td>
                                <td>{{ $baris->stok_konsentrat }} </td>
                                <td>{{ $baris->tanggal }} </td>
                                <td>
                                    <a href="/pakan/{{ $baris->id }}/edit" class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="ubah data">
                                        <i class="fa-solid fa-pen-to-square"></i></a>
                                    <form action="/pakan/{{ $baris->id }}" method="post">
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
