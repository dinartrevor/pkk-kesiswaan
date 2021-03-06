<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\Daftareskul;
class DaftareskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan=jurusan::select('id','nama_jurusan')->get();
        $daftareskul=Daftareskul::all();

        return view('admin.ekstrakulikuler.index', compact('daftareskul', $daftareskul));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan=jurusan::select('id','nama_jurusan')->get();
        
        return view('user.detail_artikel',compact('jurusan', $jurusan));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'kelas'=>'required',
            'jurusan_id'=>'required',
            'nomer_telepone'=>'required',
            'alasan'=>'required',
            
        ]);
        Daftareskul::create($request->all());
       return redirect()->route('eskul.create')->with('success', 'Pesan Telah Terkirim.');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $daftareskul= Daftareskul::find($id);
        $jurusan=Jurusan::select('id','nama_jurusan')->get();
        return view('admin.ekstrakulikuler.edit', compact('daftareskul','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $daftareskul= Daftareskul::find($id);
        $daftareskul->update($request->all());
        return redirect()->route('eskul.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftareskul= Daftareskul::find($id);
        if(!$daftareskul){
            return redirect()->back();
        }
        $daftareskul->delete();
        return redirect()->route('eskul.index');
    }
}
