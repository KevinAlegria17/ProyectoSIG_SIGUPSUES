<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use Carbon\Carbon;


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

  public function reporteEmpresas(Request $request)
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

  public function reporteEmpresasDescargar(Request $request)
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
      view()->share(compact('beneficiarios'));
// Set extra option
             PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            // pass view file
             $pdf = PDF::loadView('reportes.beneficiariosPrueba');
            // download pdf
             return $pdf->download('beneficiarios.pdf');
  }

  public function reporteNoEscogidos(Request $request)
    {
      $now = Carbon::now();
      $year = $now->subYear();
      $sss = DB::table('servicio_social')
      ->select('servicio_social.nombre','servicio_social.fecha_ingreso','servicio_social.monto')
      ->whereDate('fecha_ingreso', '<', $year)
      ->where('estado_id','=','1')
      ->get();
      
      $view = \View::make("reportes.NoEscogidos")->with(compact('sss'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('ReporteNoEscogidos.pdf');
  }

  public function reporteNoEscogidosDescargar(Request $request)
    {
      $now = Carbon::now();
      $year = $now->subYear();
      $sss = DB::table('servicio_social')
      ->select('servicio_social.nombre','servicio_social.fecha_ingreso','servicio_social.monto')
      ->whereDate('fecha_ingreso', '<', $year)
      ->where('estado_id','=','1')
      ->get();

      view()->share(compact('sss'));
             PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
             $pdf = PDF::loadView('reportes.NoEscogidos');
             return $pdf->download('ReporteNoEscogidos.pdf');
  }

  public function reporteAbandonados(Request $request)
    {
      $sss = DB::table('servicio_social')
      ->select('servicio_social.nombre','servicio_social.fecha_ingreso','servicio_social.monto')
      //->whereDate('fecha_ingreso', '<', $year)
      ->where('estado_id','=','3')
      ->get();
      
      $view = \View::make("reportes.Abandonados")->with(compact('sss'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('ReporteAbandonados.pdf');
  }

  public function reporteAbandonadosDescargar(Request $request)
    {
      $sss = DB::table('servicio_social')
      ->select('servicio_social.nombre','servicio_social.fecha_ingreso','servicio_social.monto')
      //->whereDate('fecha_ingreso', '<', $year)
      ->where('estado_id','=','3')
      ->get();

      view()->share(compact('sss'));
             PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
             $pdf = PDF::loadView('reportes.Abandonados');
             return $pdf->download('ReporteAbandonados.pdf');
  }

  public function reporteCantidadBeneficiarios(Request $request)
    {
      $bene = $request->get('bene');
      if($bene==0){
        $beneficiarios = DB::table('servicio_social')
      ->select('servicio_social.nombre','servicio_social.fecha_ingreso','servicio_social.monto','servicio_social.beneficiarios_directos as beneficiarios')
      ->get();
      }
      if($bene==1){
        $beneficiarios = DB::table('servicio_social')
      ->select('servicio_social.nombre','servicio_social.fecha_ingreso','servicio_social.monto','servicio_social.beneficiarios_directos as beneficiarios')
      ->get();
      }
      if($bene==2){
        $beneficiarios = DB::table('servicio_social')
      ->select('servicio_social.nombre','servicio_social.fecha_ingreso','servicio_social.monto','servicio_social.beneficiarios_indirectos as beneficiarios')
      ->get();
      }

      $view = \View::make("reportes.CantidadBeneficiarios")->with(compact('beneficiarios'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('CantidadBeneficiarios.pdf');
  }

  public function reporteCantidadBeneficiariosDescargar(Request $request)
    {
      $bene = $request->get('bene');
      $sss = DB::table('servicio_social')
      ->select('servicio_social.nombre','servicio_social.fecha_ingreso','servicio_social.monto')
      //->whereDate('fecha_ingreso', '<', $year)
      ->where('estado_id','=','3')
      ->get();

      view()->share(compact('sss'));
             PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
             $pdf = PDF::loadView('reportes.Abandonados');
             return $pdf->download('ReporteAbandonados.pdf');
  }

  public function reporteCupos(Request $request)
    {
      $sss = DB::table('expediente_servicio_socials')
        ->join('servicio_social', 'servicio_social.id', '=', 'expediente_servicio_socials.servicio_social_id')
        ->select(DB::raw('nombre,servicio_social_id,numero_estudiantes as cupos_totales, count(servicio_social_id) as actuales, (numero_estudiantes - count(servicio_social_id)) as disponibles'))
        ->groupBy('servicio_social_id', 'nombre','cupos_totales')
        ->get();

      $view = \View::make("reportes.RepoCuposDisponibles")->with(compact('sss'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      return $pdf->stream('CuposDisponibles.pdf');
  }

  public function reporteCuposDescargar(Request $request)
    {
      $sss = DB::table('expediente_servicio_socials')
        ->join('servicio_social', 'servicio_social.id', '=', 'expediente_servicio_socials.servicio_social_id')
        ->select(DB::raw('nombre,servicio_social_id,numero_estudiantes as cupos_totales, count(servicio_social_id) as actuales, (numero_estudiantes - count(servicio_social_id)) as disponibles'))
        ->groupBy('servicio_social_id', 'nombre','cupos_totales')
        ->get();

      view()->share(compact('sss'));
             PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
             $pdf = PDF::loadView('reportes.RepoCuposDisponibles');
             return $pdf->download('CuposDisponibles.pdf');
  }
}
