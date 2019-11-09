<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kategori;
use App\Artikel;
use Session;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        $artikel = Artikel::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute minimal :min karakter',
            'unique' => ':attribute sudah ada'
        ];
        $this->validate($request, [
            'nama_kategori' => 'required|min:3|unique:kategori'
        ], $messages);

        $kategori = Kategori::create([
            'nama_kategori' => $request->nama_kategori
        ]);
        return redirect('/kategori')->with('sukses', 'Kategori baru telah dibuat');
    }
}
