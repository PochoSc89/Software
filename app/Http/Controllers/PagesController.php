<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function Dashboard(){
  return view('Dashboard');
  }
  public function Informes(){
    return view('Informes');
  }
  public function Soporte(){
    return view('Soporte');
  }
  public function Stock(){

    return View('Stock');
  }
  public function PanelControl(){

    return view('PanelControl');
  }
}
