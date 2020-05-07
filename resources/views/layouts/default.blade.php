<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <header class="header">
    <div class="container">
     <div class="flex">
      <div class="logo">
        <img src="{{asset('img/logo.png')}}" alt="">
      </div>
      <div class="right">
        <form action="">
          <button class="logout">
            <img src="{{asset('img/icons/logout.svg')}}" alt="">
            AUSLOGGEN
          </button>
        </form>
        <p>Ihre Kundennummer: 123456789</p>
      </div>
     </div>
    </div>
  </header>
  @yield('content')

  <footer class="footer">
    <div class="container">
      <div class="flex">
        <ul>
          <li><a href="#">AGB</a></li>
          <li><a href="#">Impressum</a></li>
          <li><a href="#">Datenschutz</a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>
</html>