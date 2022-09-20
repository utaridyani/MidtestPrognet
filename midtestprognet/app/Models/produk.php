<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $table = 'produks';
    protected $fillable = [
        'kode',
        'nama_produk',
        'id_merk',
        'id_satuan',
        'stok',
        'id_supplier',
        'harga_jual',
        'foto_barang',
    ];

    public function merk() {
        return $this->belongsTo('App\Models\merk', 'id_merk', 'id');
    }

    public function supplier() {
        return $this->belongsTo(supplier::class, 'id_supplier');
    }

    public function satuan() {
        return $this->belongsTo(satuan::class, 'id_satuan');
    }
}
