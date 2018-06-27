<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


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

  public function servicioSocialFinalizado(Request $request)
    {
      
  }

  public function reporteEmpresasDescargar(Request $request)
    {
      
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
      DB::insert('insert into bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [1,Auth::user()->name, Auth::user()->email, 'Genero Reporte Servicio Social No Escogidos']);
        DB::commit();
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
             DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [1,Auth::user()->name, Auth::user()->email, 'Descargo Reporte Servicio Social No Escogidos']);
        DB::commit();
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
      DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [2,Auth::user()->name, Auth::user()->email, 'Genero Reporte de Proyectos Abandonados']);
        DB::commit();
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
             DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [2,Auth::user()->name, Auth::user()->email, 'Descargo Reporte de Proyectos Abandonados']);
        DB::commit();
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
      DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [3,Auth::user()->name, Auth::user()->email, 'Genero Reporte de Servicio Social con mayor Cantidad de beneficiarios ']);
        DB::commit();
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

             DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [3,Auth::user()->name, Auth::user()->email, 'Descargo Reporte Servicio Social con mayor Cantidad de beneficiarios']);
        DB::commit();
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
       DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [4,Auth::user()->name, Auth::user()->email, 'Genero Reporte con Cupos Disponibles por cada Proyecto']);
        DB::commit();
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

              DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [4,Auth::user()->name, Auth::user()->email, 'Genero Reporte de cupos disponibles en cada proyecto']);
        DB::commit();
             return $pdf->download('CuposDisponibles.pdf');
  }




  public function dineroAhorrado(Request $request)
    {

      $anio = $request->get('anio');
      $dinero = DB::table('servicio_social')
        ->select(DB::raw(' SUM(monto) monto, year(fecha_ingreso) fecha'))
        ->whereYear('fecha_ingreso','=',$anio)
         ->groupBy('fecha_ingreso')
        ->get();

      view()->share(compact('dinero'));

      $view = \View::make("reportes.dinero")->with(compact('dinero'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
       DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [5,Auth::user()->name, Auth::user()->email, 'Genero Reporte de dinero ahorrado en un año']);
        DB::commit();
      return $pdf->stream('dinero.pdf');
  }

  public function dineroAhorradoDescargar(Request $request)
    {
         $anio = $request->get('anio');
      $dinero = DB::table('servicio_social')
        ->select(DB::raw(' SUM(monto) monto,fecha_ingreso'))
        ->where('year(fecha_ingreso)','=',$anio)
         ->groupBy('fecha_ingreso')
        ->get();

      view()->share(compact('dinero'));

             PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
             $pdf = PDF::loadView('reportes.dinero');
             DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [5,Auth::user()->name, Auth::user()->email, 'Descargo Reporte de dinero ahorrado en un año']);
        DB::commit();
             return $pdf->download('dineroAhorrado.pdf');
  }

public function cantidadPeticiones(Request $request)
    {
      DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [6,Auth::user()->name, Auth::user()->email, 'Genero Reporte de Cantidad de Peticiones de Servicio Social']);
        //DB::commit();

      $cantidad = DB::table('servicio_social')
        ->select(DB::raw('COUNT(id) as cantidad, escuela_id as escuela'))
         ->groupBy('escuela_id')
        ->get();

      view()->share(compact('cantidad'));

      $view = \View::make("reportes.cantidadPeticiones")->with(compact('cantidad'))->render();
      $pdf = \App::make('dompdf.wrapper');
      $pdf->loadHTML($view);
      
      return $pdf->stream('cantidad.pdf');
  }

  public function cantidadPeticionesDescargar(Request $request)
    {
         $anio = $request->get('anio');
      $dinero = DB::table('servicio_social')
        ->select(DB::raw(' SUM(id) monto,fecha_ingreso'))
        ->where('year(fecha_ingreso)','=',$anio)
         ->groupBy('fecha_ingreso')
        ->get();

      view()->share(compact('dinero'));

             PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
             $pdf = PDF::loadView('reportes.dinero');
             DB::insert('insert into Bitacora (id_usuario,usuario,email,accion) values (?,?, ?,?)', [6,Auth::user()->name, Auth::user()->email, 'Descargo Reporte de cantidad de Peticiones en un año']);
        DB::commit();
             return $pdf->download('dineroAhorrado.pdf');
  }
}
