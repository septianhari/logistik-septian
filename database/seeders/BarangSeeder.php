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

        Barang::create([
            'kode_barang' => 'B004',
            'nama_barang' => 'Sunscreen Acne',
            'stok' => 150
        ]);

        Barang::create([
            'kode_barang' => 'B005',
            'nama_barang' => 'Serum Vitamin C',
            'stok' => 80
        ]);

        Barang::create([
            'kode_barang' => 'B006',
            'nama_barang' => 'Toner Free Alcohol',
            'stok' => 120
        ]);
    }
}

