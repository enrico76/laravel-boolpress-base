<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bollpress</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
      <div class="container">
        <header>
          <h1>boolpress</h1>
        </header>
        <main>
          @yield('content')
        </main>
        <footer>
          <h4>Myfooter</h4>
        </footer>

      </div>

    </body>
</html>
