<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table='barangs';

    protected $fillable=[
        'nama_barang','kode_barang','description','stok_barang','harga_barang','status','is_active'
    ];
}
