<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function showUploadForm()
    {
        return view('upload');
    }

    public function upload(Request $request)
    {
        // Validasi input
        $request->validate([
            'photo' => 'required|image|max:2048', // Maksimal ukuran foto adalah 2MB
        ]);

        // Mengunggah foto ke sistem file
        $imagePath = $request->file('photo')->store('public/front/img');

        // Mendapatkan path yang benar untuk file yang diunggah
        $imagePath = str_replace('public/', '', $imagePath);

        // Menyimpan data foto ke dalam database
        $photo = new Photo;
        $photo->filename = $imagePath;
        $photo->save();

        return redirect('/')->with('success', 'Foto berhasil diunggah!');
    }
}
