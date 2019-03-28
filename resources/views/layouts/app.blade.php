<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--title>{{ config('app.name', 'DevMarketer') }}</title-->
    <title>Devmarketer</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">

    <nav class="navbar has-shadow">
      <div class="container">
        <div class="navbar-start">
          <a class="navbar-item h-50 m-r-10">
            <img class="logo" src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer Logo" />
          </a>
          <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-5">Learn</a>
          <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-5">Discuss</a>
          <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-5">Share</a>
        </div>
        
        <div class="navbar-end">
          @if (Auth::guest())
            <a href="" class="navbar-item is-tab">Login</a>
            <a href="" class="navbar-item is-tab">Join the Community</a>
          @else
            <button class="dropdown navbar-item is-tab">
              Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>
              
              <ul class="dropdown-menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="#">Manage</a></li>
                <li class="seperator"></li>
                <li><a href="#">Logout</a></li>
              </ul>
            </button>
          @endif
        </div>
      </div>
    </nav>

    @yield('content')

  </div>
</body>
</html>
