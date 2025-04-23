<!-- resources/views/barang_masuk/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Barang Masuk</h3>
    <a href="{{ route('barang-masuk.create') }}" class="btn btn-primary mb-3">+ Catat Barang Masuk</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Quantity</th>
                <th>Origin (Asal barang)</th>
                <th>Tanggal Masuk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $bm)
                <tr>
                    <td>{{ $bm->barang->kode_barang }}</td>
                    <td>{{ $bm->barang->nama_barang }}</td>
                    <td>{{ $bm->quantity }}</td>
                    <td>{{ $bm->origin }}</td>
                    <td>{{ $bm->tanggal_masuk }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection