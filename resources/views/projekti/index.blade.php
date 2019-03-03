<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Projekti</h1>
  <ul>
      @foreach ($nazivprojekta as $projekti)
        <li>
          <a href="/projekti/{{ $projekti->id}}">
          {{$projekti->naziv_projekta}}
          </a>
        </li>
      @endforeach
  </ul>
  <a href="/projekti/create">Kreiraj novi projekat</a>
  </body>
</html>
