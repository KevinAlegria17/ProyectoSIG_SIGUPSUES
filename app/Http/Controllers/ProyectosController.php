<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    //
    public function reponoesco()
    {
        return view('/proyectos/ObtenerNoEscogidos');
    }
    public function repoabandonados()
    {
        return view('/proyectos/ObtenerAbandonados');
    }
}
