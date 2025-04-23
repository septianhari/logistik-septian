<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class StokBarangController extends Controller
{
    public function index()
    {
        // Ambil data barang dengan stok yang tersedia
        $barangs = Barang::all(); 
        return view('stok.index', compact('barangs'));
    }
}

