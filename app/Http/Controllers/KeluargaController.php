<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Keluarga;

use App\Crud;

use App\Models\User;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    
    public function profile($id)
    {
        $keluarga = Keluarga::find($id);
        $crud = Crud::all();
        return view('keluarga.profile', ['keluarga' => $keluarga, 'crud' => $crud ]);
    }

    public function index(Request $request)
    {

        $search = $request->get('search');
        $klrg = Keluarga::where('ayah','like', '%'.$search.'%')->paginate(10);
        return view('keluarga', ['klrg' => $klrg]);

        $klrg = Keluarga::latest()->paginate(10);
        return view('keluarga', compact('klrg'))->with('i', (request()->input('page', 1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createkeluarga');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ayah' => 'required',
            'ibu' => 'required',
            'alamat' => 'required'
        ]);

      
        $form_data = array(
            'ayah'    =>  $request->ayah,
            'ibu'     =>  $request->ibu,
            'alamat'       =>  $request->alamat
           
        );

        Keluarga::create($form_data);

        return redirect('keluarga')->with('success', 'Data Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $klrg = Keluarga::findOrFail($id);
        return view('viewkeluarga', compact('klrg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $klrg = Keluarga::findOrFail($id);
        return view('editkeluarga', compact('klrg'));
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
        $request->validate([
            'ayah' => 'required',
            'ibu' => 'required',
            'alamat' => 'required'
        ]);

        $klrg = Keluarga::find($id);
        $klrg->ayah = $request->input('ayah');
        $klrg->ibu = $request->input('ibu');
        $klrg->alamat = $request->input('alamat');
        $klrg->save();
        return redirect('keluarga')->with('success', 'Data is Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
