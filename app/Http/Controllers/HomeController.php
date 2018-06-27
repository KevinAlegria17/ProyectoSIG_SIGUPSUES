<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {

         $noEscogido = DB::table('Bitacora')
                ->where('id_usuario','=','1')->count();

        $Abandonados = DB::table('Bitacora')
                ->where('id_usuario','=','2')->count();

        $CantidadBeneficiarios = DB::table('Bitacora')
                ->where('id_usuario','=','3')->count();

        $Cupos = DB::table('Bitacora')
                ->where('id_usuario','=','4')->count();

        $dineroAhorrado = DB::table('Bitacora')
                ->where('id_usuario','=','5')->count();

        $CantidadPeticiones = DB::table('Bitacora')
                ->where('id_usuario','=','6')->count();
                
    
        return view('adminlte::home')
        ->with(['noEscogido' => $noEscogido])
        ->with(['Abandonados' => $Abandonados])
        ->with(['CantidadBeneficiarios' => $CantidadBeneficiarios])
        ->with(['Cupos' => $Cupos])
        ->with(['dineroAhorrado' => $dineroAhorrado])
        ->with(['CantidadPeticiones' => $CantidadPeticiones]);
    }
     public function alumnos()
    {
        return view('alumno');
    }
    public function proyectos()
    {
        return view('proyectos');
    }
    public function serviciosocial()
    {
        return view('serviciosocial');
    }
    public function otros()
    {
        return view('otros');
    }
}