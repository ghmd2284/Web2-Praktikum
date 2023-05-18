<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Bikin fungsi untuk menampilkan view form
    public function index()
    {
        return view('form');
    }
    // Bikin fungsi untuk menampilkan hasil inputan form
    public function hasil(Request $request)
    {
        // Validasi inputan
        $this->validate($request, [
            'nama' => 'required',
            'ttl' => 'required',
            'jenis_kelamin' => 'required',
            'hobi' => 'required',
        ]);
        return view('hasil', ['data' => $request]);
    }
}
