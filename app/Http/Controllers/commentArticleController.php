<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Artikel;
use App\User;
use App\ComentsArticle;
use Session;

class commentArticleController extends Controller
{
    public function index()
    {
       
    }

    public function create(Artikel $article)
    {
        
    }

    public function store(Request $request, Artikel $artikel)
    {
        ComentsArticle::create([
            'artikel_id' => $artikel->id,
            'user_id' =>auth()->user()->id,
            'content' => $request->content,
        ]);

        return redirect()->back()->with('sukses', 'Komentar berhasil dikirim');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
