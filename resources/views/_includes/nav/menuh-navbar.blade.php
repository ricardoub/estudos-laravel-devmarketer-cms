<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="container is fluid">

    <div class="navbar-brand">
      <a class="navbar-item h-50 m-r-10" href="{{ route('home') }}">
        <img class="logo" src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer Logo" />
      </a>
  
      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>

    </div>
    
    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        
        <a href="#" class="navbar-item">Learn</a>
        <a href="#" class="navbar-item">Discuss</a>
        <a href="#" class="navbar-item">Share</a>  

      </div>
  
      <div class="navbar-end">

        @guest
          <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
          <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
        @else

          <div class="navbar-item has-dropdown is-hoverable is-open">
            
            <a class="navbar-link">
              Hey {{ Auth::user()->name }} 
            </a>
    
            <div class="navbar-dropdown">
              <a class="navbar-item">
                <span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-20"></i></span>
                Profile
              </a>
              <a class="navbar-item">
                  <span class="icon"><i class="fa fa-fw fa-bell m-r-20"></i></span>
                  Notifications
              </a>
              <a class="navbar-item" href="{{route('manage.dashboard')}}">
                <span class="icon"><i class="fa fa-fw fa-cog m-r-20"></i></span>
                Manage
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item" href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-20"></i>
                </span>
                Logout
              </a>
              @include('_includes.forms.logout')
            </div>
          </div>

        @endguest

      </div>

    </div>

  </div>

</nav>