@extends('base')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Szenarien" />
<meta name="author" content="Mattis Petroll, Guido Grün" />
<meta name="copyright" content="Mattis Petroll, Guido Grün" />
<title>Szenarien</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="{{ asset('js/scenario-new.js') }}" defer></script>
@endsection

@section('headline')
<div class="headline_new">
    <h1 class="heading">Szenario erstellen</h1>
    <h2 class="subheading"></h2>
</div>
@endsection
@section('main')
<div class="textbox_middle_main_new">
    <div class="textbox_small_new">
        <div class="vertically_centered mb-3" data-bs-theme="dark">
            <div class="hundred">
                <div>
                    <label for="scenario_name">Name</label>
                    <input type="Name" class="form-control" id="scenario_name" value="{{ $scenario->name }}">
                </div>
            </div>
        </div>
    </div>
    <div class="textbox_small_new">
        <label for="scenario_description">Beschreibung</label>
        <div class="overflow_middle" data-bs-theme="dark">
            <textarea class="form-control description_small"
                id="scenario_description">{{ $scenario->description }}</textarea>
        </div>
    </div>
</div>

<div class="textbox_big_headline">
    <h4>Phasen</h4>
</div>
<div class="textbox_big_padded no_sidescroll">
    <div class="overflow_fitted no_sidescroll" data-bs-theme="dark">
        <table class="table">
            <thead>
                <tr>
                    <th>Nr.</th>
                    <th>Titel</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($phases); $i++) <tr>
                    <th>{{ $i + 1 }}</th>
                    <td> <p class="text_no_overflow_ellipsis">{{ $phases[$i]->name }}</p> </td>
                    <td class="right">
                        <button
                            onclick="window.location.href = '{{ route('phases.edit', ['scenario_id' => $scenario->id, 'phase_id' => $phases[$i]->id]) }}'"
                            class="btn btn-secondary button_very_small">bearbeiten</button>
                    </td>
                    </tr>
                    @endfor
            </tbody>
        </table>
    </div>
</div>
<button class="btn btn-secondary other_button_small_new" data-bs-toggle="modal" data-bs-target="#phase_modal" data-bs-theme="dark">
    <img class="plus_image" src="{{ asset('images/Pluszeichen.png') }}"></img>
    Phase
</button>
@endsection

@section('footer')
<div class="three_buttons_new">
    <button class="three_buttons_spacing button_small btn btn-secondary" id="scenario_save_btn">
        Speichern
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" data-bs-toggle="modal"
        data-bs-target="#scenario_delete_modal">
        Löschen
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" id="scenario_cancel_btn">
        Abbrechen
    </button>
</div>
@endsection

@section('modals')
<!-- add phase modal -->
<div class="modal fade" id="phase_modal" tabindex="-1" aria-labelledby="phaseModal" aria-hidden="true" data-bs-theme="dark">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="phaseModal">Phase erstellen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group mx-2 mb-3">
                    <label for="phase-creation-title">Titel</label>
                    <input type="text" class="form-control modal_textbox" container-fluid id="phase_creation_title"
                        placeholder=". . ." required="">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button_small btn-secondary" data-bs-dismiss="modal">Schließen</button>
                <button type="button" class="btn button_small btn-secondary" id="create_phase_btn" disabled>Erstellen</button>
            </div>
        </div>
    </div>
</div>

<!-- add scenario delete modal -->
<div class="modal fade" id="scenario_delete_modal" tabindex="-1" aria-labelledby="scenarioModal" aria-hidden="true"
    data-bs-theme="dark">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="scenarioModal">Szenario wirklich löschen?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button_small_popup btn-secondary"
                    data-bs-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn button_small_popup btn-secondary" id="scenario_delete_btn">Löschen</button>
            </div>
        </div>
    </div>
</div>
@endsection