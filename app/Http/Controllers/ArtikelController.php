<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use Session;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel', compact('artikel'));
    }

    public function newArtikel()
    {
        return view('admin.newArtikel');
    }

    public function store(Request $request)
    {   
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter'
        ];

        $this->validate($request,[
            'judul' => 'required|min:5|max:20',
            'konten' => 'required',
            'thumbnail' => 'required'
        ],$messages);

        $artikel = Artikel::create([
            'judul' => $request->judul,
            'thumbnail' => $request->thumbnail,
            'konten' => $request->konten,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->route('artikel')->with('sukses', 'Artikel berhasil ditambahkan');
    }
}
