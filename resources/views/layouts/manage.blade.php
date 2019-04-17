<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--title>{{ config('app.name', 'DevMarketer') }}</title-->
    <title>Devmarketer - MANAGEMENT - Advanced CMS</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>
<body>
  <div id="app">

    @include('_includes.nav.menuh-navbar')

    <div class="container is-fluid">
    
      <div class="columns is-vh-100">

        <div class="column is-one-fifth is-bg-eee">
          @include('_includes.nav.manage')        
        </div>
  
        <div class="column is-four-fifths">
          @yield('content')
        </div>

      </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')

  </div>
</body>
</html>
