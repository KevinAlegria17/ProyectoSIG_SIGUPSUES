<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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

}
