<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Szenarien" />
    <meta name="author" content="Mattis Petroll, Guido Grün" />
    <meta name="copyright" content="Mattis Petroll, Guido Grün" />
    <title>Szenarien</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('css/main.css') }}" /> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../JavaScript-Dateien/main.js" defer></script>

    @vite(['resources/js/app.js', 'resources/scss/app.scss', 'resources/css/app.css'])
   
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
                    <a class="nav-link" href="./Index.html">Startseite</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./SzenarienVerwalten.html">Szenarien verwalten</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./GeräteVerwaltenStart.html">Geräte verwalten</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./DemomaterialVerwaltenStart.html">Demomaterial verwalten</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
      <div class="headline">
        <h1>Szenario verwalten</h1>
      </div>
      <div class="textbox_middle_main">
      <div class="textbox_small">
        <div class="overflow_small mb-3" data-bs-theme="dark">
          <div class="row g-3 align-items-center">
            <div class="col-auto">
            </div> 
            <div class="col-auto"> 
              <input type="Name" class="form-control" placeholder="Name">
            </div>
          </div>
        </div>
      </div>
      <div class="textbox_middle">
        <div class="overflow_middle" data-bs-theme="dark">
          <textarea class="form-control description_small" placeholder="Beschreibung"></textarea>
        </div>
      </div>
    </div>
      <div class="headline_szenario_h4">
        <h4>Phase 1</h4>
      </div>
      <div class="textbox_big_szenario_verwalten">
        <div class="overflow_big_szenario" data-bs-theme="dark">
          <table class="table">
            <thead>
              <tr>
                <th>Nr.</th>
                <th>Titel</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @for ($i = 0; $i < count($phases); $i++)
              <tr>
                <th>{{ $i }}</th>
                <td>{{ $phases[$i]->name }}</td>
                <td class="right">
                  <button onclick="window.location.href='Phase.html';" class="btn btn-secondary button_very_small">bearbeiten</button>
                </td>
              </tr>
              @endfor
            </tbody>
          </table>
        </div>
      </div>
      <div class="plus_phase">
        <a onclick="window.location.href='Phase.html';" class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
          <img class="plus_image" src="../images/Pluszeichen.png"></img>
          Phase
        </a>
      </div>
      <div class="three_buttons">
        <div onclick="window.location.href='SzenarienVerwalten.html';" class="three_buttons_spacing">
          <a class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
              Speichern
          </a>
        </div>
        <div onclick="window.location.href='SzenarienVerwalten.html';" class="three_buttons_spacing">
          <a class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
              Löschen
          </a>
        </div>
        <div onclick="window.location.href='SzenarienVerwalten.html';" class="three_buttons_spacing">
          <a class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
              Abbrechen
          </a>
        </div>
      </div>
    </main>
    <footer>

    </footer>
</body>
</html>