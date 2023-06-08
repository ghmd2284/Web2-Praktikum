<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriProduk extends Model
{
    use HasFactory;

    // Menghubukan ke db KategoriProduk
    protected $table = 'Kategori_produk';

    //ubah timestamp false
    public $timestamps = false;

    // kolam yang bisa diisi 
    protected $fillable = [
        'id',
        'nama',
    ];

    public function Produk() 
    {
        return $this->hasMany(Produk::class);
    }

    public static function getAllKategoriProduk()
    {
        return DB::table('kategori_produk')->get();
    }
}
