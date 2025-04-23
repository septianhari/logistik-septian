<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangMasuk;
use Illuminate\Http\Request;

class BarangMasukController extends Controller
{
    public function index()
    {
        $data = BarangMasuk::with('barang')->get();
        return view('barang_masuk.index', compact('data'));
    }

    public function create()
    {
        $barangs = Barang::all();
        return view('barang_masuk.create', compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'barang_id' => 'required|exists:barangs,id',
            'quantity' => 'required|integer|min:1',
            'origin' => 'required',
            'tanggal_masuk' => 'required|date',
        ]);

        BarangMasuk::create($request->all());

        // Tambah stok barang
        $barang = Barang::find($request->barang_id);
        $barang->stok += $request->quantity;
        $barang->save();

        return redirect()->route('barang-masuk.index')->with('success', 'Barang masuk berhasil dicatat');
    }
}