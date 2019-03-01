<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Polisa;

class PagesController extends Controller
{
    public function home()
  {
    return view('welcome')->with([

      'fst' => 'prvi',

      'tasks' => ['Idi mi','Dodji mi', 'Spetakl']
    ]);
  }

  public function informacije()
  {

    return view ('informacije');

  }

  public function kontakti()
  {
    return view ('kontakti');
  }

  public function dajPolise()
  {
    $polisa = new Polisa;
  }
}
