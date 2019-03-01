@extends('layout')

@section('content')
  <h1 class="title">Edituj projekat</h1>
<form method="POST" action="/projekti/{{$projekat->id}}">
  {{method_field('PATCH')}}
  {{csrf_field()}}
<div class="field">
    <label class="label" for="title">Naslov</label>
      <div class="control">
        <input class="input" type="text" name="title" placeholder="Naslov" value="{{ $projekat->naziv_projekta }}">
      </div>
</div>

<div class="field">
  <label class="label" for="description">Opis</label>
    <div class="control">
      <textarea name="description" class="textarea">{{ $projekat->opis}}</textarea>
    </div>
</div>

<div class="field">
    <div class="control">
      <button type="submit" name="button is-link">Update projekta</button>
    </div>
</div>

</form>
@endsection
