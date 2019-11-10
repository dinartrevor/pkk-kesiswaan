<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Artikel;
use App\User;
use App\ComentsArticle;

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
            'article_id' => $artikel->id,
            'user_id' =>auth()->user()->id,
            'content' => $request->content,
        ]);

        return redirect()->back();
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
