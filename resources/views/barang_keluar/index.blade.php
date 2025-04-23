<!-- resources/views/barang_keluar/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Daftar Barang Keluar</h3>
    <a href="{{ route('barang-keluar.create') }}" class="btn btn-primary mb-3">+ Catat Barang Keluar</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Quantity</th>
                <th>Destination (Tujuan barang)</th>
                <th>Tanggal Keluar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $bk)
                <tr>
                    <td>{{ $bk->barang->kode_barang }}</td>
                    <td>{{ $bk->barang->nama_barang }}</td>
                    <td>{{ $bk->quantity }}</td>
                    <td>{{ $bk->destination }}</td>
                    <td>{{ $bk->tanggal_keluar }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection