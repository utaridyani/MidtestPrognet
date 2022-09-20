<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $table = 'suppliers';
    protected $primarykey='id';
    protected $fillable = [
        'kode_supplier',
        'nama_supplier',
        'alamat',
        'kontak',
    ];

    public function supplier() {
        return $this->hasMany(produk::class);
    }

}
