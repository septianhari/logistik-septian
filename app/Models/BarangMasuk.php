<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BarangMasuk extends Model
{
    protected $fillable = ['barang_id', 'quantity', 'origin', 'tanggal_masuk'];

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
