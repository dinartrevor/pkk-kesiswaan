<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Extracurricular;
use App\Members;
use App\User;
use Session;

class ExtracurricularController extends Controller
{
    public function index()
    {
			$extracurricular = Extracurricular::all();
			return view('admin.extracurricular.index', compact('extracurricular'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.extracurricular.newExtracurricular');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
			$user = new \App\User;
			// insert ke table user
			$user->name = $request->name_coach;
			$user->email = $request->email;
			$user->password = bcrypt('smkpi52');
			$user->remember_token = str_random(60);
			$user->role = 'pengurus';
			$user->save();
			// insert ke table ekskul
			Extracurricular::create([
				'name' => $request->name,
				'user_id' => $user->id,
				'name_coach' => $user->name,
				'email' => $request->email,
				'descriptions' => $request->description
			]);

			return redirect()->back()->with(
				'sukses', 'Ekstrakurikuler baru telah berhasil dibuat'
			);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Extracurricular $extracurricular)
    {
      return view('admin.extracurricular.showMembers', compact('extracurricular'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Extracurricular $extracurricular)
    {
      return view('admin.extracurricular.editExtracurricular', compact('extracurricular'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Extracurricular $extracurricular)
    {
			$user = new \App\User;
			// insert ke table user
			$user->id = $extracurricular->user->user_id;
			$user->name = $request->name_coach;
			$user->email = $request->email;
			$user->password = bcrypt($request->password);
			$user->update();

			$extracurricular->update($request->all());

			return redirect()->back()->with(
				'sukses', 'Ekstrakurikuler telah berhasil diubah'
			);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Extracurricular $extracurricular)
    {
      $extracurricular->delete();
      return redirect()->back()->with('sukses', 'Ekstrakurikuler berhasil dihapus');
    }
}
