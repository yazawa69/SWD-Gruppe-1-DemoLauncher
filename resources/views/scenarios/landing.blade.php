@extends('base')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Startseite" />
<meta name="author" content="Mattis Petroll, Guido Grün" />
<meta name="copyright" content="Mattis Petroll, Guido Grün" />
<title>Startseite</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="{{ asset('js/scenario-landing.js') }}" defer></script>
@endsection

@section('headline')
<div class="headline_new">
    <h1 class="heading">Startseite</h1>
    <h2 class="subheading">Starte ein Szenario</h2>
</div>
@endsection
@section('main')
<div class="dropdown szenario_dropdown_container">
    @if (count($scenarios) > 0)
    <button class="btn btn-secondary dropdown-toggle gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px szenario_button"
        id="add_scenario_button" type="button" data-bs-toggle="dropdown" aria-expanded="false" data-bs-theme="dark">
        Szenario auswählen
    </button>
    @else
    <button class="btn btn-secondary gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px szenario_button" type="button"
        aria-expanded="false" data-bs-toggle="modal" data-bs-target="#scenario_modal" data-bs-theme="dark">
        Szenario erstellen
    </button>
    @endif
    <ul class="dropdown-menu" data-bs-theme="dark">
        @foreach ($scenarios as $scenario)
        @php
        $scenario_data = json_encode(['id' => $scenario->id, 'name' => $scenario->name, 'description' => $scenario->description]);
        @endphp
        <li><button class="dropdown-item" onclick="select_scenario({{ $scenario_data }})">{{ $scenario->name }}</button>
        </li>
        @endforeach
    </ul>
</div>
<div class="textbox_big_new">
    <div class="overflow_big_new">
        <p id="scenario_description">
            Beschreibung
        </p>
    </div>
</div>
<div class="centered index_edit_button_div_new">
    <button class="btn btn-secondary index_edit_button" type="button" id="scenario_edit_btn"
        data-bs-theme="dark" disabled>
        Szenario bearbeiten
    </button>
</div>
@endsection

@section('footer')
<div class="centered start_end_button_div_new">
    <button class="btn btn-secondary start_end_button_new" id="scenario_start_btn"
        type="button" data-bs-theme="dark" disabled>
        Start
    </button>
</div>
@endsection


@section('modals')
<!-- add scenario modal -->
<div class="modal fade" id="scenario_modal" tabindex="-1" aria-labelledby="scenarioModal" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="scenarioModal">Szenario erstellen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mx-2 mb-3">
                    <label for="scenario-creation-title">Titel</label>
                    <input name="scenario-creation-title" type="text" class="form-control modal_textbox container-fluid"
                        id="scenario-creation-name" placeholder=". . ." required="">
                </div>
                <div class="form-group mx-2">
                    <label for="scenario-creation-description">Beschreibung</label>
                    <textarea class="form-control modal_textbox container-fluid" placeholder=". . ."
                        name="scenario-creation-description" id="scenario-creation-description" cols="30" rows="10"
                        required></textarea>
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