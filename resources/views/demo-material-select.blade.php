@extends('base')

@section('head')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Demomaterial verwalten" />
    <meta name="author" content="Mattis Petroll, Guido Grün" />
    <meta name="copyright" content="Mattis Petroll, Guido Grün" />
    <title>Demomaterial verwalten</title>
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
        <div class="textbox_big">
            <div class="overflow_big">
                <div>
                    <button class="btn btn-secondary list">Material 1</button>
                    <button class="btn btn-secondary list">Material 2</button>
                    <button class="btn btn-secondary list">Material 3</button>
                    <button class="btn btn-secondary list">Material 4</button>
                    <button class="btn btn-secondary list">Material 5</button>
                    <button class="btn btn-secondary list">Material 6</button>
                </div>
            </div>
        </div>
        <div onclick="window.location.href='/demo-material-types/{demo_material_type_id}/demo-materials/{demo_material_id}/edit';" class="centered button_middle_main1">
            <a class="btn btn-secondary button_middle" href="#" data-bs-theme="dark">
                Material bearbeiten
            </a>
        </div>
        <div onclick="window.location.href='/demo-material-types/{demo_material_type_id}/demo-materials/{demo_material_id}/new';" class="centered button_middle_main2">
            <a class="btn btn-secondary button_middle" href="#" data-bs-theme="dark">
                Material hinzufügen
            </a>
        </div>
        @endsection
    </main>
    <footer>

    </footer>
</body>

</html>