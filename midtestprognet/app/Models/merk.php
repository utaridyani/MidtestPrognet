<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'merks';
    protected $primarykey='id';
    protected $fillable = [
        'kode_merk',
        'nama_merk',
    ];
}
