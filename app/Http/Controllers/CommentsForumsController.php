<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forums;
use App\User;
use App\CommentsForums;
use Session;
class CommentsForumsController extends Controller
{
    public function index()
    {
       
    }

    public function create(Artikel $article)
    {
        
    }

    public function store(Request $request, Forums $forums)
    {
        CommentsForums::create([
            'forums_id' => $forums->id,
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
