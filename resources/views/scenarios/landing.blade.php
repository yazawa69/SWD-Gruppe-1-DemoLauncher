@extends('base')

@section('head')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Startseite" />
    <meta name="author" content="Mattis Petroll, Guido Grün" />
    <meta name="copyright" content="Mattis Petroll, Guido Grün" />
    <title>Startseite</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="../JavaScript-Dateien/main.js" defer></script>
@endsection

@section('content')
      <div class="headline">
        <h1>Startseite</h1>
      </div>
      <div class="dropdown szenario">
        <button class="btn btn-secondary dropdown-toggle gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px szenario_button" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-theme="dark">
          {{ $scenarios[0]->name }}
        </button>
        <ul class="dropdown-menu" data-bs-theme="dark">
          @foreach ($scenarios as $scenario)
            <li><button class="dropdown-item" onclick="set_scenario_id({{ $scenario->id }})">{{ $scenario->name }}</button></li>
          @endforeach
        </ul>
      </div>
      <div class="textbox_big">
        <div class="overflow_big">
          <p id="szenario">
            {{ $scenarios[0]->description }}
          </p>
        </div>
      </div>
      <div class="centered index_edit_button_div">
        <button onclick="window.location.href='Szenarien.html';" class="btn btn-secondary index_edit_button" type="button" data-bs-theme="dark">
            Szenario bearbeiten
        </button>
      </div>
      <div class="centered start_end_button_div">
        <button onclick="window.location.href='SzenarioLäuft.html';" class="btn btn-secondary start_end_button" type="button" data-bs-theme="dark">
            Start
        </button>
      </div>
@endsection