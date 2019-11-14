<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Members;
use App\Extracurricular;
use App\Students;

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
		$students = new \App\Students;
		$members = new \App\Members;
		if ($request->nis == $students->nis) {
			$request->all();
			$members->extracurricular_id = $extracurricular->id;
			$members->save();
			return $members;
		}else if ($request->nis != $students->nis) {
			# code...
			return "gagal";
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
