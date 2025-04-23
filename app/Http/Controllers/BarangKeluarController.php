<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    public function index()
    {
        // Ambil data barang keluar dan relasikan dengan barang
        $data = BarangKeluar::with('barang')->get();
        return view('barang_keluar.index', compact('data'));
    }

    public function create()
    {
        // Ambil data barang untuk dropdown
        $barangs = Barang::all();
        return view('barang_keluar.create', compact('barangs'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'quantity' => 'required|integer|min:1',
            'destination' => 'required',
            'tanggal_keluar' => 'required|date',
        ]);

        // Simpan barang keluar
        BarangKeluar::create($request->all());

        // Kurangi stok barang
        $barang = Barang::find($request->barang_id);
        $barang->stok -= $request->quantity;
        $barang->save();

        return redirect()->route('barang-keluar.index')->with('success', 'Barang keluar berhasil dicatat');
    }
}