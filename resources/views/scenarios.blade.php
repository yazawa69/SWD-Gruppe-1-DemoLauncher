@extends('base')

@section('head')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Szenarien verwalten" />
    <meta name="author" content="Mattis Petroll, Guido Grün" />
    <meta name="copyright" content="Mattis Petroll, Guido Grün" />
    <title>Szenarien verwalten</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
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
            <h1>Szenarien verwalten</h1>
        </div>
        <div class="textbox_big">
            <div class="overflow_big">
                <div class="centered">
                    @foreach ($scenarios as $scenario)
                    <button class="btn btn-secondary list">{{ $scenario->name }}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="divider"></div>
        <div onclick="window.location.href='Szenarien.html';" class="centered">
            <a class="btn btn-secondary button_middle" href="" data-bs-theme="dark">
                Szenario bearbeiten
            </a>
        </div>
        <div onclick="window.location.href='Szenarien.html';" class="centered">
            <a class="btn btn-secondary button_middle" href="#" data-bs-theme="dark">
                Szenario erstellen
            </a>
        </div>
        <div onclick="window.location.href='SzenarioLäuft.html';" class="centered">
            <a class="btn btn-secondary button_middle" href="#" data-bs-theme="dark">
                Ausgewähltes Szenario starten
            </a>
        </div>
        @endsection
    </main>
    <footer>

    </footer>
</body>

</html>