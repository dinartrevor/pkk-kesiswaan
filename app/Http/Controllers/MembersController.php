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
        return view('user.eskul.index', compact('extracurricular'));
    }
    
    public function create(Extracurricular $extracurricular)
    {
        return view('user.eskul.detail_eskul', compact('extracurricular'));
    }

    public function store(Request $request, Extracurricular $extracurricular)
    {
        if (auth()->user()) {
            $students = Students::whereNis($request->nis)->first();
            if ($students) {
                $members = $students->extracurricular_student()->create(['extracurriculars_id' => $extracurricular->id]);
                return redirect()->back()->with('sukses', '	Anda telah terdaftar sebagai anggota '.$extracurricular->name);
            } else {
                return redirect()->back()->with('error', '	NIS tidak ada');
            }
            
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
