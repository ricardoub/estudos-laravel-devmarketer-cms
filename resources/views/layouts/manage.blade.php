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
  <div>

    @include('_includes.nav.menuh-navbar')
    
    @include('_includes.nav.manage')

    <div class="management-area" id="app">
      @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    @include('_includes.notifications.toast')
    @yield('scripts')

  </div>
</body>
</html>
