<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
      //Vista hoteles

      public function hoteles()
      {
          return view('servicios.hoteles');
      }

      public function vista1()
      {
          return view('vistasHoteles.vista1');
      }
  
      public function vista2()
      {
          return view('vistasHoteles.vista2');
      }
  
      public function vista3()
      {
          return view('vistasHoteles.vista3');
      }
  
      public function vista4()
      {
          return view('vistasHoteles.vista4');
      }
  
      public function vista5()
      {
          return view('vistasHoteles.vista5');
      }
}
