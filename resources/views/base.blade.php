<!DOCTYPE html>
<html lang="de">
    <head>
        @yield('head')
    </head>
    
    <body class="spec_body">
        <header class="spec_header">
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid" id="navbar_container">
                  <a class="navbar-brand" href="{{ route('landing') }}">
                    <img class="logo_image" src="{{ asset('images/Logo.png') }}"></img>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="menu">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul id="nav_list_container" class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing') }}">Startseite</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('scenarios.index') }}">Szenarien verwalten</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('device-types.index') }}">Geräte verwalten</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('demo-material-types.index') }}">Demomaterial verwalten</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            @yield('headline')
        </header>

        <main class="spec_main">
            @yield('main')
        </main>
        <footer class="spec_footer">
            @yield('footer')
        </footer>    
      @yield('modals')
    </body>
</html>