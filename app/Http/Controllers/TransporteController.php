<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransporteController extends Controller
{
     //Vista transporte

     public function transporte()
     {
         return view('servicios.transporte');
     }

     public function vista1()
     {
         return view('vistasTransporte.vista1');
     }

     public function vista2()
     {
         return view('vistasTransporte.vista2');
     }

     public function vista3()
     {
         return view('vistasTransporte.vista3');
     }
 
 
}
