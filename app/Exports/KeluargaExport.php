<?php

namespace App\Exports;

use App\Keluarga;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class KeluargaExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    public function view(): View 
    {
        return view('export.eksporkeluarga', [ 'ekspor' => Keluarga::all()
    ]);
    }
}
