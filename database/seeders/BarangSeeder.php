<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    public function run()
    {
        Barang::create([
            'kode_barang' => 'B001',
            'nama_barang' => 'Facial Wash',
            'stok' => 100
        ]);

        Barang::create([
            'kode_barang' => 'B002',
            'nama_barang' => 'Ceramide Moisturizer',
            'stok' => 50
        ]);

        Barang::create([
            'kode_barang' => 'B003',
            'nama_barang' => 'Peeling',
            'stok' => 200
        ]);
    }
}

