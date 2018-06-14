<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reporteController extends Controller
{
    		public function reporteDescargar(Request $request)
  	{
  		
         
            // Set extra option
             PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            // pass view file
             $pdf = PDF::loadView('reportes.AlumnosAnio');
            // download pdf
             return $pdf->download('alumnos.pdf');
     
	}
}
