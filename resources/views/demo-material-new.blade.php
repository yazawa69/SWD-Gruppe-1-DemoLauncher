@extends('base')

@section('head')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Demomaterial" />
    <meta name="author" content="Mattis Petroll, Guido Grün" />
    <meta name="copyright" content="Mattis Petroll, Guido Grün" />
    <title>Demomaterial</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS-Dateien/main.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="../JavaScript-Dateien/main.js" defer></script>
</head>
@endsection

<body>
    <main>
        @section('content')
        <div class="headline">
            <h1>Demomaterial</h1>
        </div>
        <div class="textbox_middle_main">
            <div class="textbox_small">
                <div class="overflow_small mb-3" data-bs-theme="dark">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <input type="Name" class="form-control" placeholder="Name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="textbox_small">
                <div class="overflow_small mb-3" data-bs-theme="dark">
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
        </div>
        <div class="textbox_big_main">
            <div class="textbox_big">
                <div class="overflow_big" data-bs-theme="dark">
                    <textarea class="form-control description" placeholder="Beschreibung"></textarea>
                </div>
            </div>
        </div>
        <div class="three_buttons">
            <div onclick="window.location.href='DemomaterialVerwalten.html';" class="three_buttons_spacing">
                <a class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
                    Speichern
                </a>
            </div>
            <div onclick="window.location.href='DemomaterialVerwalten.html';" class="three_buttons_spacing">
                <a class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
                    Löschen
                </a>
            </div>
            <div onclick="window.location.href='DemomaterialVerwalten.html';" class="three_buttons_spacing">
                <a class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
                    Abbrechen
                </a>
            </div>
        </div>
        @endsection
    </main>
    <footer>

    </footer>
</body>

</html>