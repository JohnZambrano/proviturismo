<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestauranteController extends Controller
{
       //Vista restaurantes

       public function restaurantes()
       {
           return view('servicios.restaurantes');
       }

       public function vista1()
    {
        return view('vistasRestaurantes.vista1');
    }

    public function vista2()
    {
        return view('vistasRestaurantes.vista2');
    }

    public function vista3()
    {
        return view('vistasRestaurantes.vista3');
    }

    public function vista4()
    {
        return view('vistasRestaurantes.vista4');
    }

    public function vista5()
    {
        return view('vistasRestaurantes.vista5');
    }

    public function vista6()
    {
        return view('vistasRestaurantes.vista6');
    }

    public function vista7()
    {
        return view('vistasRestaurantes.vista7');
    }

    public function vista8()
    {
        return view('vistasRestaurantes.vista8');
    }

    public function vista9()
    {
        return view('vistasRestaurantes.vista9');
    }
   
}
