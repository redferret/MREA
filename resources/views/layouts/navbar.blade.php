
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <!-- Branding Image -->
      <a class="navbar-brand" href="{{ url('/rebuild') }}">
        {{ config('app.name', 'MREA System') }}
      </a>
    </div>
    <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        &nbsp;
        @if (Auth::user())
        @include('layouts.menu')
        @endif
      </ul>
      <div class="row">
        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
          @else
          @include('layouts.userdropdown')
          @endif
        </ul>
      </div>
    </div>
  </div>
</nav>
