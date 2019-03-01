@extends('layout')

@section('<title>Home</title>')
  Home
@endsection

@section('sadrzaj')

  <h1>Moj {{ $fst }} sajt</h1>
<ul>
  @foreach ($tasks as $task)
    <li>{{ $task }}</li>
  @endforeach
</ul>



@endsection
