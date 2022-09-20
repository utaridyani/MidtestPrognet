<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class satuan extends Model
{
    use HasFactory;
    protected $table = 'satuans';
    protected $primarykey='id';
    protected $fillable = [
        'kode_satuan',
        'nama_satuan',
    ];

    public function satuan() {
        return $this->hasMany(produk::class);
    }
}
