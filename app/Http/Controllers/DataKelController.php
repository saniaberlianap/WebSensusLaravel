<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Keluarga;

class DataKelController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->get('search');
        $klrg = Keluarga::where('ayah','like', '%'.$search.'%')->paginate(10);
        return view('dataanak', ['klrg' => $klrg]);

        $klrg = Keluarga::latest()->paginate(10);
        return view('dataanak', compact('klrg'));
    }
}
