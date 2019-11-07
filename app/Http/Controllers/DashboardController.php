<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;

class DashboardController extends Controller
{
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.index',compact('artikel'));
    }
}
