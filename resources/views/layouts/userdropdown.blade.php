<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    {{ Auth::user()->name }} <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu">
    <li>
      <a href="{{ url('/account') }}">
        Account
      </a>
      @if (Auth::user()->account_type > 2)
      <a href='{{url('/admin')}}'>
        Admin
      </a>
      @endif
      <a href="{{ url('/logout') }}"
         onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
        Logout
      </a>
      <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </ul>
</li>