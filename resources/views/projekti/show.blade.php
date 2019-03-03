@extends('layout')

@section('content')

<h1 class="title">{{ $projekti->naziv_projekta }}</h1>

<div class="content">{{ $projekti->opis}}
  <p>
    <a href="/projekti/{{$projekti->id}}/edit">Edituj</a>
  </p>
</div>

@if($projekti->tasks->count())
<div>
  @foreach($projekti->tasks as $task)
  <li>
    {{$task->description}}
  </li>
  @endforeach
</div>
@endif

@endsection
