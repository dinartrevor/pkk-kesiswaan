<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daftareskul;
use App\Jurusan;
use App\Kategori;

class DashboardController extends Controller
{
    public function index()
    {
        $total_eskul = Daftareskul::count();
        $total_jurusan = Jurusan::count();
        $kategori_artikel = Kategori::count();
        
        return view('admin.index', ['daftareskul' => $total_eskul, 'jurusan' => $total_jurusan, 'kategori' => $kategori_artikel]);
    }
}
