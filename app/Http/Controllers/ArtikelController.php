<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use App\Kategori;
use App\ComentsArticle;
use Session;
use Illuminate\Support\Str;
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

        $artikel->slug = null;
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
        $coment = ComentsArticle::all()->where('artikel_id',$artikel->id);
        $kategori=Kategori::withCount('Artikel')->get();
        $artikel_terbaru=Artikel::orderBy('id', 'DESC')->limit(2)->get();
        return view('user.detail_artikel', ['artikel'=>$artikel, 'coment'=>$coment, 'kategori'=>$kategori, 'artikel_terbaru'=>$artikel_terbaru,]);
    }
    public function user(Artikel $artikel)
    {
        $coment = ComentsArticle::all()->where('artikel_id',$artikel->id);
        $artikel = Artikel::paginate(4);
        $kategori = Kategori::all();
        $kategori=Kategori::withCount('Artikel')->get();
        $artikel_terbaru=Artikel::orderBy('id', 'DESC')->limit(2)->get();
        return view('user.artikel', compact('artikel','kategori','artikel_terbaru','coment'));
    }
    public function homeUser(Artikel $artikel)
    {
        $coment = ComentsArticle::all()->where('artikel_id',$artikel->id);
        $artikel = Artikel::limit(4)->get();
        $kategori = Kategori::all();
        $kategori=Kategori::withCount('Artikel')->get();
        $artikel_random=Artikel::orderBy('id', 'DESC')->limit(3)->get();
        return view('user.index', compact('artikel','kategori','artikel_random','coment'));
        
    }

}
