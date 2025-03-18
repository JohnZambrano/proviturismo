<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaServicioController extends Controller
{
    //Vista general servicios
    public function servicios()
    {
        return view('servicios.servicios');
    }

 
}
