@extends('base')

@section('head')

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Demomaterial verwalten Start" />
    <meta name="author" content="Mattis Petroll, Guido Grün" />
    <meta name="copyright" content="Mattis Petroll, Guido Grün" />
    <title>Demomaterial verwalten Start</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="../JavaScript-Dateien/main.js" defer></script>
@endsection

@section('content')
    <div class="headline">
        <h1>Art des Demomaterials</h1>
    </div>
    <div class="textbox_middle_main">
        @foreach($demo_material_types as $demo_material_type)
        <div class="box_middle">
            <div onclick="window.location.href='/demo-material-types/{demo_material_type_id}/demo-materials';" class="overflow_middle">
                <img class="selection_image" src="../images/PDF.png"></img>
                <p class="selection_text">{{ $demo_material_type->filename_extension }}</p>
            </div>
        </div>
        @endforeach
    </div>
@endsection