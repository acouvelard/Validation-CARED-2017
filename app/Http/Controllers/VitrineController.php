<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument;
use DB;

class VitrineController extends Controller
{
  //affichage des produits
  public function index()
  {
    $instruments = Instrument::all();
    return view('vitrine', ['instruments' => $instruments]);
  }
}
