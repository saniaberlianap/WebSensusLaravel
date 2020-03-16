<?php

namespace App\Exports;

use App\Crud;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class CrudExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */

    use Exportable;
    public function view(): View 
    {
        return view('export.ekspor', [ 'ekspor' => Crud::all()
    ]);
    }
}
