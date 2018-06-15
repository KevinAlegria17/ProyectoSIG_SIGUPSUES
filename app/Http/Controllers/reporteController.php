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
      if($anio==0){
        $beneficiarios = DB::table('beneficiario')
        ->join('servicio_social', 'beneficiario.id', '=', 'servicio_social.beneficiario_id')
        ->select('beneficiario.nombre','beneficiario.apellido','servicio_social.nombre as ss_nom','servicio_social.fecha_ingreso','servicio_social.monto','beneficiario.correo_organizacion','beneficiario.telefono')->get();
      
      }else{
        $beneficiarios = DB::table('beneficiario')
        ->join('servicio_social', 'beneficiario.id', '=', 'servicio_social.beneficiario_id')
        ->select('beneficiario.nombre','beneficiario.apellido','servicio_social.nombre as ss_nom','servicio_social.fecha_ingreso','servicio_social.monto','beneficiario.correo_organizacion','beneficiario.telefono')
        ->whereYear('fecha_ingreso',$anio)->get();
        
      }
      $view = \View::make("reportes.beneficiariosPrueba")->with(compact('beneficiarios'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('Reporte.pdf');
  }

  public function reporte_Descargar(Request $request)
    {
      $anio = $request->get('anio');
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
