<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Keluarga;

use PDF; 
use App\Exports\KeluargaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExportKeluargaController extends Controller
{
    public function export_excel()
	{
		return Excel::download(new KeluargaExport, 'DataKeluarga.xlsx');
	}

	public function cetak_pdf()
    {
    	$keluarga = keluarga::all();
 
    	$pdf = PDF::loadview('keluarga_pdf',['keluarga'=>$keluarga]);
    	return $pdf->stream();
    }
}
