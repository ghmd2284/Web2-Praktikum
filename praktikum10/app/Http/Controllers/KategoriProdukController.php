<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;

class KategoriProdukController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategoriProduk = KategoriProduk::getAllKategoriProduk();

        //arahkan ke view produk
        return view('admin.produk.kategori.kategori', compact('kategoriProduk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoriProduk = KategoriProduk::all();

        return view('admin.produk.kategori.create', compact('kategoriProduk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategoriProduk = new KategoriProduk;
        $kategoriProduk->nama = $request->nama;
        $kategoriProduk->save();

        return redirect('kategori')->with('success', 'Kategori Produk Berhasi DiTambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategoriProduk = KategoriProduk::where('id', $id)->get();
        
        return view('admin.produk.kategori.edit', compact('kategoriProduk'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategoriProduk = KategoriProduk::find($request->id);
        $kategoriProduk->nama = $request->nama;
        $kategoriProduk->save();

        return redirect('kategori')->with('success', 'Kategori Produk Berhasi Diubah');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategoriProduk = KategoriProduk::find($id);
        $kategoriProduk->delete();

        return redirect('kategori')->with('success', 'Kategori Produk Berhasi Dihapus');
        
    }
}

