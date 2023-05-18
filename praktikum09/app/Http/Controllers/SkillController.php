<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    //
    
    // Bikin fungsi untuk menampilkan view form
    public function skill()
    {
        return view('skill');
    }
    public function skillHasil(Request $request)
    {
        // Validasi inputan
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required',
            'lokasi' => 'required',
            'jenis_kelamin' => 'required',
            'skill' => 'required|array|min:1',
        ]);
        return view('skillhasil', ['data' => $request]);
    }
}
