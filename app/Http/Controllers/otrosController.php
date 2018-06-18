<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class otrosController extends Controller
{
    public function peticiones()
    {
        return view('/otros/peticiones');
    }
}
