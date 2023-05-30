<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Demomaterial verwalten Start" />
    <meta name="author" content="Mattis Petroll, Guido Grün" />
    <meta name="copyright" content="Mattis Petroll, Guido Grün" />
    <title>Demomaterial verwalten Start</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS-Dateien/main.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../JavaScript-Dateien/main.js" defer></script>
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
                    <a class="nav-link" href="./SzenarienVerwalten.html">Szenarien verwalten</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./GeräteVerwaltenStart.html">Geräte verwalten</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Demomaterial verwalten</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    <main>
      <div class="headline">
        <h1>Art des Demomaterials</h1>
      </div>
      <div class="textbox_middle_main">
      <div class="box_middle">
        <div onclick="window.location.href='DemomaterialVerwalten.html';" class="overflow_middle">
          <img class="selection_image" src="../images/PDF.png"></img>
          <p class="selection_text">.pdf</p>
        </div>
      </div>
      <div class="box_middle">
        <div onclick="window.location.href='DemomaterialVerwalten.html';" class="overflow_middle">
          <img class="selection_image" src="../images/Video.png"></img>
          <p class="selection_text">.mp4</p>
        </div>
      </div>
      <div class="box_middle">
        <div onclick="window.location.href='DemomaterialVerwalten.html';" class="overflow_middle">
          <img class="selection_image" src="../images/Audio.png"></img>
          <p class="selection_text">.mp3</p>
        </div>
      </div>
    </div>
    </main>
    <footer>

    </footer>
</body>
</html>