<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Artikel;

class ApiController extends Controller
{
    public function edit(Request $request, Artikel $artikel)
    {
       $artikel->update(['judul' => $request->value]);
    }
}
