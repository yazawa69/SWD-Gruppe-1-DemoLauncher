@extends('base')

@section('head')
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
<script src="{{ asset('js/scenario-index.js') }}" defer></script>
@endsection

@section('headline')
<div class="headline_new">
    <h1 class="heading">Szenarien</h1>
    <h2 class="subheading"> Verwalten</h2>
</div>
@endsection
@section('main')
<div class="textbox_big_new">
    <div class="overflow_big">
        <div>
            @foreach ($scenarios as $scenario)
            <button class="btn btn-secondary list text_no_overflow_ellipsis_2"
                onclick="set_scenario_id({{ $scenario->id }})" id="scenario_list">{{ $scenario->name }}</button>
            @endforeach
        </div>
    </div>
</div>

@endsection
@section('footer')
<div class="three_buttons_new space">
    <button class="three_buttons_spacing button_small btn btn-secondary" id="scenario_edit_btn" disabled>
        Bearbeiten
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" data-bs-toggle="modal"
        data-bs-target="#scenario_modal" onclick="empty_modal()">
        Erstellen
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" id="scenario_start_btn" disabled>
        Starten
    </button>
</div>
@endsection

@section('modals')
<!-- add scenario modal -->
<div class="modal fade" id="scenario_modal" tabindex="-1" aria-labelledby="scenarioModal" aria-hidden="true"
    data-bs-theme="dark">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="scenarioModal">Szenario erstellen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mx-2 mb-3">
                    <label for="scenario-creation-title">Titel</label>
                    <input name="scenario-creation-title" type="text" 
                        class="form-control modal_textbox container-fluid" id="scenario-creation-name"
                        placeholder=". . ." required="">
                </div>
                <div class="form-group mx-2">
                    <label for="scenario-creation-description">Beschreibung</label>
                    <textarea class="form-control modal_textbox container-fluid"
                        name="scenario-creation-description" id="scenario-creation-description" cols="30" rows="10"
                        placeholder=". . ." required>
                    </textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn button_small_popup btn-secondary"
                    data-bs-dismiss="modal">Schließen
                </button>
                <button type="submit" class="btn button_small_popup btn-secondary" id="create_scenario_btn"
                    disabled>Erstellen
                </button>
            </div>
        </div>
    </div>
</div>
@endsection