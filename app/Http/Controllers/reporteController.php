<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

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

  public function reporte(Request $request)
    {
      $anio = $request->get('anio');
      $ciclo = $request->get('ciclo');
      $beneficiarios = DB::table('beneficiario')->select('beneficiario.nombre','beneficiario.apellido')->get();
      $view = \View::make("reportes.beneficiariosPrueba")->with(compact('beneficiarios'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('Reporte.pdf');
  }

  public function reporte_Descargar(Request $request)
    {
      $anio = $request->get('anio');
      $ciclo = $request->get('ciclo');
      $beneficiarios = DB::table('beneficiario')->select('beneficiario.nombre','beneficiario.apellido')->get();
      view()->share(compact('beneficiarios'));
// Set extra option
             PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            // pass view file
             $pdf = PDF::loadView('reportes.beneficiariosPrueba');
            // download pdf
             return $pdf->download('beneficiarios.pdf');
  }
}
