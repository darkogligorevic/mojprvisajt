<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Kreiraj novi projekat</h1>

<form method="POST" action="/projekti">
  {{csrf_field()}}
  <div>
    <input type="text" name="naslov" placeholder="Naslov projekta">
  </div>

  <div>
    <textarea name="opis" placeholder="Opis projekta"></textarea>
  </div>
  <div>
    <button type="submit">Kreiraj projekat</button>
  </div>
</form>
  </body>
</html>
