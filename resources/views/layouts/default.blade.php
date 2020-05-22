<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CrossBorder, MultiCarrier, GoInternational with PARCEL.ONE</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
  <header class="header">
    <div class="container">
     <div class="flex">
      <div class="logo">
        <a href="https://parcel.one/">
          <img src="{{asset('img/logo.png')}}" alt="">
        </a>
      </div>
      <div class="right">
        <form action="{{route('logout')}}" method="POST">
            @csrf
          <button class="logout" type="submit">
            <img src="{{asset('img/icons/logout.svg')}}" alt="">
            AUSLOGGEN
          </button>
        </form>
      @if(\App\User::find(Auth::id())->is_admin == false)
        <p>Deine Kundennummer: {{Auth::id()}}</p>
      @endif
      </div>
     </div>
    </div>
  </header>
  @yield('content')

  <footer class="footer">
    <div class="container">
      <div class="flex">
        <ul>
          <li><a href="https://parcel.one/wp-content/uploads/2020/03/P1-Versandbedingungen-AGB.pdf" target="_blank">AGB</a></li>
          <li><a href="https://parcel.one/Impressum" target="_blank">Impressum</a></li>
          <li><a href="https://parcel.one/datenschutz" target="_blank">Datenschutz</a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>
</html>
