<!DOCTYPE html>
<html lang="de">
    <head>
        @yield('head')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="./Index.html">
                    <img class="logo_image" src="../images/Logo.png"></img>
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Startseite</a>
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
          </header>
          <main>
            @yield('content')
          </main>
          <footer>

          </footer>
    </body>
</html>