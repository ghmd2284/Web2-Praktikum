<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Produk extends Model
{
    use HasFactory;

    // Menentukan nama table yang terhubung dengan model ini
    protected $table = 'produk';

    //ubah timestamp false
    public $timestamps = false;

    // kolam - kolam yang akan diisi secara massal
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'harga_beli',
        'stok',
        'min_stok',
        'deskripsi',
        'kategori_produk_id',
    ];

    // definisi belongsto dengan model kategoriProduk
    public function kategori_produk()
    {
        return $this->belongsTo(KategoriProduk::class);
    }

    // Buat menampilkan semua Data
    public static function getAllProduk()
    {
        // return DB::table('produk')->get();

        // Mengambil semua data produk dan menggabungkannya dengan kategori produk terkait
        $alldata = DB::table('produk')
            ->join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();
        return $alldata;
    }
}
