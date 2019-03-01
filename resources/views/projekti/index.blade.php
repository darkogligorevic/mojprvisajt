<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Projekti</h1>

    @foreach ($nazivprojekta as $projekti)
      <li>{{$projekti->naziv_projekta}}</li>
    @endforeach
  </body>
</html>
