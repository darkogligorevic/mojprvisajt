<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Kreiraj novi projekat</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
  <h1 class="title">Kreiraj novi projekat</h1>

  <form method="POST" action="/projekti">
    {{csrf_field()}}
    <div>
      <input type="text" class="input {{$errors->has('naziv_projekta') ? 'is-danger':''}}" name="naziv_projekta" placeholder="Naslov projekta" value="{{old('naziv_projekta')}}">
    </div>

    <div>
      <textarea name="opis" class="textarea {{$errors->has('opis') ? 'is-danger':''}}" placeholder="Opis projekta">{{old('opis')}}</textarea>
    </div>
    <div>
      <button type="submit" class="button is-link">Kreiraj projekat</button>
    </div>
    @if ($errors->any())
    <div class="notification is-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </form>
</body>
</html>
