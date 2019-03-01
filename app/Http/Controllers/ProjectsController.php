<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projekti;

class ProjectsController extends Controller
{
    public function index()
    {

      $nazivprojekta = Projekti::all();

      return view('projekti.index', compact('nazivprojekta'));
    }

    public function create()
    {
      return View('projekti.create');
    }

    public function show()
    {

    }

    public function edit($id)
    {
      $projekat = Projekti::find($id);
      return view('projekti.edit', compact('projekat'));
    }

    public function update()
    {
      dd(request()->all());
    }

    public function destroy()
    {

    }

    public function store()
    {
      $projekat = new Projekti();

      $projekat->naziv_projekta = Request('naslov');
      $projekat->Opis = Request('opis');

      $projekat->save();

      return redirect('/projekti');
    }
}
