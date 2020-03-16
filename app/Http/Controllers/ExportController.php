<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Crud;

use PDF; 
use App\Exports\CrudExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class ExportController extends Controller
{
	
 
	public function export_excel2()
	{
		return Excel::download(new CrudExport, 'DataAnak.xlsx');
	}

	public function cetak_pdf2()
    {
    	$crud = Crud::all();
 
    	$pdf = PDF::loadview('crud_pdf',['crud'=>$crud]);
    	return $pdf->stream();
    }
}