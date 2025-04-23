<!-- resources/views/barang_keluar/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="page-title">Daftar Barang Keluar</h3>
        <a href="{{ route('barang-keluar.create') }}" class="btn btn-primary">
            + Catat Barang Keluar
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Quantity</th>
                        <th>Destination (Tujuan Barang)</th>
                        <th>Tanggal Keluar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $bk)
                        <tr>
                            <td>{{ $bk->barang->kode_barang }}</td>
                            <td>{{ $bk->barang->nama_barang }}</td>
                            <td>{{ $bk->quantity }}</td>
                            <td>{{ $bk->destination }}</td>
                            <td>{{ \Carbon\Carbon::parse($bk->tanggal_keluar)->format('d M Y') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data barang keluar.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection