<nav class="navbar has-shadow">
  <div class="container">
    <div class="navbar-start">
      <a class="navbar-item h-50 m-r-10" href="{{route('home')}}">
        <img class="logo" src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer Logo" />
      </a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-5">Learn</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-5">Discuss</a>
      <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-5">Share</a>
    </div>
    <span class="nav-toggle">
      <span></span>
      <span></span>
      <span></span>
    </span>
    
    <div class="navbar-end">
      @if (Auth::guest())
        <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
        <a href="{{ route('register') }}" class="navbar-item is-tab">Join the Community</a>
      @else
        <button class="dropdown navbar-item is-tab is-aligned-right">
          Hey {{ Auth::user()->name }} <span class="icon"><i class="fa fa-caret-down"></i></span>
          
          <ul class="dropdown-menu">
            <li>
              <a href="#">
                <span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-5"></i></span>
                Profile
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fa fa-fw fa-bell m-r-5"></i></span>
                Notifications
              </a>
            </li>
            <li>
              <a href="#">
                <span class="icon"><i class="fa fa-fw fa-cog m-r-5"></i></span>
                Manage
              </a>
            </li>
            <li class="seperator"></li>
            <li>
              <a href="{{route('logout')}}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span class="icon">
                  <i class="fa fa-fw fa-sign-out m-r-5"></i>
                </span>
                Logout
              </a>
              @include('_includes.forms.logout')
            </li>
          </ul>
        </button>
      @endif
    </div>
  </div>
</nav>
