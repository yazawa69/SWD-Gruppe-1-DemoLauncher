
@extends('base')

@section('head')
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Szenarien verwalten" />
    <meta name="author" content="Mattis Petroll, Guido Grün" />
    <meta name="copyright" content="Mattis Petroll, Guido Grün" />
    <title>Szenarien verwalten</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scenario.js') }}" defer></script>
@endsection

@section('content')
    <div class="headline">
        <h1>Szenarien verwalten</h1>
        </div>
        <div class="textbox_big">
        <div class="overflow_big">
            <div>
                @foreach ($scenarios as $scenario)
                <button class="btn btn-secondary list">{{ $scenario->name }}</button>
                @endforeach
            </div>
        </div>
        </div>
        <div class="centered button_middle_main1">
        <a class="btn btn-secondary button_middle" href="Szenarien.html" data-bs-theme="dark">
            Szenario bearbeiten
        </a>
        </div>
        <div class="centered button_middle_main2">
        <a class="btn btn-secondary button_middle" href="" data-bs-toggle="modal" data-bs-target="#scenario_modal" data-bs-theme="dark">
            Szenario erstellen
        </a>
        </div>
        <div class="centered button_middle_main3">
        <a class="btn btn-secondary button_middle" href="SzenarioLäuft.html" data-bs-theme="dark">
            Ausgewähltes Szenario starten
        </a>
    </div>
  
  <!-- add scenario modal -->
    <div class="modal fade" id="scenario_modal" tabindex="-1" aria-labelledby="scenarioModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="scenarioModal">Szenario erstellen</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
                <div class="form-group mx-2 mb-3">
                    <label for="scenario-creation-title">Titel</label>
                    <input name="scenario-creation-title" type="text" class="form-control modal_textbox container-fluid" id="scenario-creation-name" placeholder=". . ." required="">
                </div>
                <div class="form-group mx-2">
                    <label for="scenario-creation-description">Beschreibung</label>
                    <textarea class="form-control modal_textbox container-fluid" placeholder=". . ." name="scenario-creation-description" id="scenario-creation-description" cols="30" rows="10" required></textarea>
                </div>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
            <button type="submit" class="btn btn-primary" id="create_scenario_btn">Erstellen</button>
        </div>
        </div>
    </div>
    </div>
  
@endsection
    