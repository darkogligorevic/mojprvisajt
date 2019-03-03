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

    public function show(Projekti $projekti)
    {
      // return $projekti;
      return View('projekti.show', compact('projekti'));
    }

    public function edit(Projekti $projekti)
    {

      return view('projekti.edit', compact('projekti'));
    }

    public function update(Projekti $projekti)
    {
      $projekti->update(request(['naziv_projekta', 'opis']));


      return redirect('/projekti');
    }

    public function destroy(Projekti $projekti)
    {
      $projekti->delete();
      return redirect('/projekti');
    }

    public function store()
    {
    $validated = request()->validate([
        'naziv_projekta' => ['required', 'min:3'],
        'opis' => ['required', 'min:3']
      ]);
      Projekti::create($validated);

      return redirect('/projekti');
    }
}
