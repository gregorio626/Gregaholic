<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Gregaholic | Welcome</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">


    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="container">
        <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
          <img src="{{ asset('images/logo_large.png') }}">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarMenu">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

        <div id="navbarMenu" class="navbar-menu">

          <div class="navbar-start">

            <a class="navbar-item is-tab" href="{{ route('home') }}">Home</a>
            <a class="navbar-item is-tab">Blog</a>
            <a class="navbar-item is-tab">Forum</a>

            <div class="navbar-item has-dropdown is-hoverable">

              <a class="navbar-link">More</a>

              <div class="navbar-dropdown">

                <a class="navbar-item">About</a>
                <a class="navbar-item">Contact</a>
                <a class="navbar-item">Legal</a>
                <hr class="navbar-divider">
                <a class="navbar-item">Report an issue</a>

              </div>
            </div>
          </div>

          <div class="navbar-end">
            @if (Auth::guest())
              <div class="navbar-item">
                <div class="buttons">
                  <a class="button button-signup" href="{{ route('register') }}"><strong>Sign up</strong></a>
                  <a class="button is-light" href="{{ route('login') }}">Log in</a>
                </div>
              </div>
            @else
              <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link" href="#">Hey Greg</a>

                <div class="navbar-dropdown" href="#">
                  <a class="navbar-item"><span class="icon"><i class="fa fa-user-circle"></i></span> Profile</a>
                  <a class="navbar-item" href="#"><span class="icon"><i class="fa fa-bell"></i></span> Notifications</a>
                  <a class="navbar-item" href="#"><span class="icon"><i class="fa fa-cog"></i></span> Settings</a>
                  <hr class="navbar-divider">
                  <a class="navbar-item" href="{{ route('logout') }}"><span class="icon"><i class="fa fa-power-off"></i></span> Logout</a>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </nav>



    <main>
      @yield('content')
    </main>
  </div>
</body>
</html>
