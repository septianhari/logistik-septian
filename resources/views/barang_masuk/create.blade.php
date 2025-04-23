<!-- resources/views/barang_masuk/create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="page-title">Form Barang Masuk</h3>
        <a href="{{ route('barang-masuk.index') }}" class="btn btn-outline-secondary">← Kembali</a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ route('barang-masuk.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="barang_id" class="form-label">Barang</label>
                    <select name="barang_id" class="form-select" required>
                        <option value="">-- Pilih Barang --</option>
                        @foreach ($barangs as $barang)
                            <option value="{{ $barang->id }}" {{ old('barang_id') == $barang->id ? 'selected' : '' }}>
                                {{ $barang->kode_barang }} - {{ $barang->nama_barang }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label">Jumlah</label>
                    <input type="number" name="quantity" class="form-control" value="{{ old('quantity') }}" required>
                </div>

                <div class="mb-3">
                    <label for="origin" class="form-label">Asal Barang</label>
                    <input type="text" name="origin" class="form-control" value="{{ old('origin') }}" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal_masuk" class="form-label">Tanggal Masuk</label>
                    <input type="date" name="tanggal_masuk" class="form-control" value="{{ old('tanggal_masuk') }}" required>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">💾 Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection