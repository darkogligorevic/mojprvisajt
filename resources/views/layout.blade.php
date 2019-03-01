<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('<title>Home</title>','Moj prvi sajt')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
    <ul>

        <li><a href="/">Home</a></li>

        <li><a href="/kontakti">Kontaktirajte nas</a></li>

        <li><a href="/informacije">Informacije</a></li>

        @yield('sadrzaj')

        <div class="container">
          @yield('content')
        </div>
    </ul>
  </body>
</html>
