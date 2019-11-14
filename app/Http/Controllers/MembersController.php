<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Extracurricular;
use App\Students;
use App\ExtracurricularStudent;

class MembersController extends Controller
{
	public function index()
	{
		$extracurricular = Extracurricular::all();
		return view('admin.members.index', compact('extracurricular'));
	}
	
	public function create(Extracurricular $extracurricular)
	{
		return view('admin.members.newMembers', compact('extracurricular'));
	}

	public function store(Request $request, Extracurricular $extracurricular)
	{
		if (auth()->user()) {
			$students = Students::where('nis', $request->nis)->first();
			$members = ExtracurricularStudent::create([
				'students_id' => $students->id,
				'extracurriculars_id' => $extracurricular->id
			]);
			return redirect()->back()->with('sukses', 'Anda telah terdaftar sebagai anggota '.$extracurricular->name);
		}else{
			return redirect('/');
		}
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
