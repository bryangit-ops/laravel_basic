<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
    <header>
      <nav>
        |
        <a href="/home">Profil</a>
        |
        <a href="/mahasiswa">Data Mahasiswa</a>
        |
      </nav>
    </header>
    <br>
        <!-- Authentication Links -->
        @guest
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            @if (Route::has('register'))
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            @endif
                @else
                  Selamat Datang..
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
              <br>
              <br>
              <br>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <br>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
        @endguest

@yield ('content')

    <br>
    <footer>
      <p>
        &copy; laravel & bryanparengkuan Nov 2019
      </p>
    </footer>
    </body>
    <fo
</html>
