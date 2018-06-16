<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioSocialController extends Controller
{
    public function mayorDemanda()
    {
        return view('/serviciosocial/mayorDemanda');
    }
    public function dineroAhorrado()
    {
        return view('/serviciosocial/dineroAhorrado');
    }
    public function existenciasPorEscuela()
    {
        return view('/serviciosocial/existenciasPorEscuela');
    }
    
}
