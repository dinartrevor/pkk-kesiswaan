<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use App\Kategori;
use Session;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all()->where('user_id', auth()->user()->id);
        return view('admin.artikel.index', compact('artikel'));
    }

    public function newArtikel()
    {
        $kategori = Kategori::all();
        return view('admin.artikel.newArtikel', compact('kategori'));
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
            'thumbnail' => 'required',
            'kategori' => 'required'
        ],$messages);

        $artikel = Artikel::create([
            'judul' => $request->judul,
            'thumbnail' => $request->thumbnail,
            'konten' => $request->konten,
            'status' => $request->simpan,
            'user_id' => auth()->user()->id,
            'kategori_id' => $request->kategori
        ]);
        return redirect()->route('artikel')->with('sukses', 'Artikel berhasil ditambahkan');
    }

    public function editArtikel(Artikel $artikel)
    {
        $kategori = Kategori::all();
        if ($artikel->status == 'draft') {
            return view('admin.artikel.editArtikel', compact('artikel','kategori'));
        }else{
            return redirect('/artikel')->with('error', 'Artikel active tidak dapat diubah');
        }
    }

    public function update(Request $request, Artikel $artikel)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter'
        ];
        
        $this->validate($request,[
            'judul' => 'required|min:5|max:20',
            'konten' => 'required',
            'thumbnail' => 'required',
            'kategori' => 'required'
        ],$messages);

        $artikel->update([
            'judul' => $request->judul,
            'thumbnail' => $request->thumbnail,
            'konten' => $request->konten,
            'status' => $request->simpan,
            'user_id' => auth()->user()->id,
            'kategori_id' => $request->kategori
        ]);
        return redirect()->route('artikel')->with('sukses', 'Artikel berhasil ditambahkan');
    }

    public function destroy(Artikel $artikel)
    {
        $artikel->delete();
        return redirect()->route('artikel')->with('sukses', 'Artikel berhasil dihapus');
    }

    public function show(Artikel $artikel)
    {
        return view('admin.artikel.show', ['artikel'=>$artikel]);
    }
}
