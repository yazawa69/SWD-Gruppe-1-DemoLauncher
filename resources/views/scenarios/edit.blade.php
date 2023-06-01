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
<script src="../JavaScript-Dateien/main.js" defer></script>
@endsection

@section('content')
    <div class="headline">
        <h1>Szenario verwalten</h1>
    </div>
    <div class="textbox_middle_main">
        <div class="textbox_small">
            <div class="overflow_small mb-3" data-bs-theme="dark">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                    </div>
                    <div class="col-auto">
                        <p>{{ $scenario->name }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="textbox_middle">
            <div class="overflow_middle" data-bs-theme="dark">
                <p>{{ $scenario->description }}</p>
            </div>
        </div>
    </div>
    <div class="headline_szenario_h4">
        <h4>Phase 1</h4>
    </div>
    <div class="textbox_big_szenario_verwalten">
        <div class="overflow_big_szenario" data-bs-theme="dark">
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
                        <th>{{ $i }}</th>
                        <td>{{ $phases[$i]->name }}</td>
                        <td class="right">
                            <button onclick="window.location.href='/scenarios/{scenario_id}/phases/{phase_id}/edit';"
                                class="btn btn-secondary button_very_small">bearbeiten</button>
                        </td>
                        </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>
    <div class="plus_phase">
        <a class="btn btn-secondary button_small" data-bs-toggle="modal" data-bs-target="#phase_modal"
            data-bs-theme="dark">
            <img class="plus_image" src="../images/Pluszeichen.png"></img>
            Phase
        </a>
    </div>
    <div class="three_buttons">
        <div onclick="window.location.href='SzenarienVerwalten.html';" class="three_buttons_spacing">
            <a class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
                Speichern
            </a>
        </div>
        <div onclick="window.location.href='SzenarienVerwalten.html';" class="three_buttons_spacing">
            <a class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
                Löschen
            </a>
        </div>
        <div onclick="window.location.href='/scenarios';" class="three_buttons_spacing">
            <a class="btn btn-secondary button_small" href="#" data-bs-theme="dark">
                Abbrechen
            </a>
        </div>
    </div>

    <!-- add phase modal -->
    <div class="modal fade" id="phase_modal" tabindex="-1" aria-labelledby="phaseModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="phaseModal">Phase erstellen</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="inputs" class="needs-validation" novalidate="">
                    <div class="form-group mx-2 mb-3">
                        <label for="phase-creation-title">Titel</label>
                        <input type="text" class="form-control modal_textbox container-fluid" id="phase-creation-title" placeholder=". . ." required="">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Schließen</button>
                <button type="button" class="btn btn-primary">Erstellen</button>
            </div>
            </div>
        </div>
    </div>
@endsection


