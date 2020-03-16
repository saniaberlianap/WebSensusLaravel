<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Crud;

use App\Keluarga;


class DataController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $data = Crud::where('nama','like', '%'.$search.'%')->paginate();
        
        $keluarga = Keluarga::all();
        return view('dataanak', compact('data', 'keluarga'));

        $data = all();
        return view('dataanak', compact('data'));
    }


    
}
