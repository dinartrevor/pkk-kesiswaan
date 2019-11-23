<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Forums;
use App\User;
use App\Kategori;
use App\CommentsForums;
use App\ReplyComments;
use Session;
class ForumsController extends Controller
{
    public function index()
    {
        $forums = Forums::all();
        return view('admin.forums.index', compact('forums'));
    }
    public function newForums()
    {
        
        return view('admin.forums.newForums');
    }
    public function store(Request $request)
    {   
        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute harus diisi minimal :min karakter',
            'max' => ':attribute diisi maksimal :max karakter'
        ];

        $this->validate($request,[
            'content' => 'required'
            
        ],$messages);

        $forums = Forums::create([
            'thumbnail' => $request->thumbnail,
            'content' => $request->content,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->back()->with('sukses', 'forum berhasil ditambahkan');
    }
    public function show(Forums $forums)
    {
        // $comments = CommentsForums::where('forums_id', $forums->id)->orderBy('created_at', 'DESC');
        $comments = $forums->forums_comments;
        $kategori = Kategori::all();
        // $forum_comment = Forums::orderBy('id','DESC')->get();
        // $kategori=Kategori::withCount('Artikel')->get();
        // $artikel_terbaru=Artikel::orderBy('id', 'DESC')->limit(2)->get();
        return view('user.forum.detail_forums', ['forums'=>$forums, 'comments'=>$comments, 'kategori'=>$kategori]);
    }
    public function forumUser(Forums $forums)
    {
        // $comments = CommentsForums::all()->where('forum_id',$forums->id);
        $forums = Forums::orderBy('created_at', 'DESC')->paginate(4);
        $kategori = Kategori::all();
        return view('user.forum.index', compact('forums','comments','kategori'));
    }
    public function reply_comment(Request $request)
    {   
        $messages = [
            'required' => ':attribute wajib diisi',
        ];

        $this->validate($request,[
            'comment_id' => 'required'
            
        ],$messages);

        $forums = ReplyComments::create([
            'comments_forums_id' => $request->comment_id,
            'content' => $request->reply_content,
            'user_id' => auth()->user()->id
        ]);
        return redirect()->back()->with('sukses', 'forum berhasil ditambahkan');
    }
    public function destroy_comments_forums(Request $request)
    {
        $rc = ReplyComments::find($request->comments_forums_id);
        $rc->delete();
        return redirect()->back()->with('sukses', 'Artikel berhasil dihapus');
    }
}


