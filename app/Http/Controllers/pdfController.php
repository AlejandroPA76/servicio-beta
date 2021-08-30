<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function pdf(Request $request){
        $pdf = \PDF::loadView('producto.Documento'); //vista
        //return $pdf->download('Documento.pdf');  //descargar los datos de la vista
        return $pdf->stream('Documento.pdf');
    }
}
