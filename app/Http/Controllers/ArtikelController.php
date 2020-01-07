<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;
use App\Kategori;
use App\ComentsArticle;
use Session;
use App\Extracurricular;
use Illuminate\Support\Str;
class ArtikelController extends Controller
{
    public function index(Request $request)
    {
        $artikel = auth()->user()->artikel;
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
    public function user(Request $request, Artikel $artikel)
    {
        $coment = ComentsArticle::all()->where('artikel_id',$artikel->id);
        $artikel = Artikel::orderBy('created_at', 'DESC')->paginate(4);
        if ($request->category) {
            $artikel = Artikel::where('kategori_id', $request->category)->orderBy('created_at', 'DESC')->paginate(4);
        }
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
        $extracurricular = Extracurricular::all(); 
        $artikel_random=Artikel::orderBy('id', 'DESC')->limit(3)->get();
        
        return view('user.index', compact('artikel','kategori','artikel_random','coment','extracurricular'));
        
    }
    public  function cari(Request $request)
    {
        $search = $request->get('istilah');
        $result = Artikel::where('judul', 'LIKE', '%'. $search. '%')->get();
        return response()->json($result);
    }
    public function cariArtikel(Request $request, Artikel $artikel)
    {
    
        $coment = ComentsArticle::all()->where('artikel_id',$artikel->id);
        $artikel = Artikel::orderBy('created_at', 'DESC')->paginate(4);
        $search = $request->search;
        $artikel = Artikel::where('judul', 'LIKE', '%'. $search. '%')->orderBy('created_at', 'desc');
        if ($request->upload && $request->upload === 'old') {
            $artikel = Artikel::where('judul', 'LIKE', '%'. $search. '%')->orderBy('created_at', 'asc');    
        }
        $artikel = $artikel->paginate(4); 
        $kategori = Kategori::all();
        $kategori=Kategori::withCount('Artikel')->get();
        $artikel_terbaru=Artikel::orderBy('id', 'DESC')->limit(2)->get();
        return view('user.artikel', compact('artikel','kategori','artikel_terbaru','coment'));
    }

}
