@extends('layout')

@section('content')
<h1 class="title">Edituj projekat</h1>
<form method="POST" action="/projekti/{{$projekti->id}}">
  {{method_field('PATCH')}}
  {{csrf_field()}}
  <div class="field">
    <label class="label" for="naziv_projekta">Naslov</label>
    <div class="control">
      <input class="input" type="text" name="naziv_projekta" placeholder="Naslov" value="{{ $projekti->naziv_projekta }}">
    </div>
  </div>

  <div class="field">
    <label class="label" for="opis">Opis</label>
    <div class="control">
      <textarea name="opis" class="textarea">{{ $projekti->opis}}</textarea>
    </div>
  </div>

  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link">Update projekta</button>
    </div>
  </div>
</form>

<form method="POST" action="/projekti/{{$projekti->id}}">
  @method('DELETE')
  @csrf
  <!-- {{method_field('DELETE')}}
  {{csrf_field()}} -->

  <div class="field">
    <div class="control">
      <button type="submit" class="button is-link">Brisanje projekta</button>
    </div>
  </div>
</form>
@endsection
