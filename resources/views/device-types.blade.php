@extends('base')

@section('head')

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Geräte verwalten" />
    <meta name="author" content="Mattis Petroll, Guido Grün" />
    <meta name="copyright" content="Mattis Petroll, Guido Grün" />
    <title>Geräte verwalten Start</title>
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
            <h1>Gerätekategorie</h1>
        </div>
        <div class="textbox_middle_main">
            <div class="box_middle">
                <div onclick="window.location.href='GeräteVerwalten.html';" class="overflow_middle">
                    <img class="selection_image" src="../images/Bildschirm.png"></img>
                    <p class="selection_text">Bildschirme</p>
                </div>
            </div>
            <div class="box_middle">
                <div onclick="window.location.href='GeräteVerwalten.html';" class="overflow_middle">
                    <img class="selection_image" src="../images/VR-Brille.png"></img>
                    <p class="selection_text">VR-Brillen</p>
                </div>
            </div>
            <div class="box_middle">
                <div onclick="window.location.href='GeräteVerwalten.html';" class="overflow_middle">
                    <img class="selection_image" src="../images/Lampe.png"></img>
                    <p class="selection_text">Lampen</p>
                </div>
            </div>
        </div>
        @endsection
    </main>
    <footer>

    </footer>
</body>

</html>