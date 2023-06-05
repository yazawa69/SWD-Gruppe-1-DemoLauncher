@extends('base')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Phase" />
<meta name="author" content="Mattis Petroll, Guido Grün" />
<meta name="copyright" content="Mattis Petroll, Guido Grün" />
<title>Phase</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
{{-- <script src="../JavaScript-Dateien/main.js" defer></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{ asset('js/phase-edit.js') }}" defer></script>
@livewireStyles
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
                    <input type="Name" class="form-control" placeholder="Titel" id="phase_name">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="headline_phase_h4">
    <h4>{{ $phase->name }} - Elemente</h4>
</div>
<div class="textbox_big_phase_verwalten">
    <div class="overflow_big_szenario" data-bs-theme="dark">
        <table class="table">
            <thead>
                <tr>
                    <th>Gerät</th>
                    <th>Demomaterial</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($phase_devices); $i++) <tr>
                    <th>{{ $phase_devices[$i]->device->name }}</th>
                    <td>
                        @foreach ($phase_devices[$i]->demoMaterials as $demo_material)
                        <div class="textbox_very_small">
                            <div class="overflow_very_small">
                                <p class="text_phase">{{ $demo_material->name }}</p>
                                <img class="x_image_2" src="../images/X-Icon.png"></img>
                            </div>
                        </div>
                        @endforeach
                        <div class="textbox_very_small">
                            <div class="overflow_very_small" data-bs-toggle="modal"
                            data-bs-target="#demo-material-selection-modal" onclick="set_phase_device_id({{ $phase_devices[$i]->id }})">
                                <img class="x_image_2" src="../images/Pluszeichen.png"></img>
                                <p class="text_phase">Hinzufügen</p>
                            </div>
                        </div>
                    </td>
                    </tr>
                    @endfor
                    <tr>
                        <th>
                            <img class="plus_image" id="add-phase-device-btn" data-bs-toggle="modal"
                                data-bs-target="#device-selection-modal" src="../images/Pluszeichen.png"></img>
                        </th>
                    </tr>
                    
            </tbody>
        </table>
    </div>
</div>
<div class="three_buttons">
    <div class="three_buttons_spacing" id="phase_save_btn">
        <a class="btn btn-secondary button_small" data-bs-theme="dark">
            Speichern
        </a>
    </div>
    <div class="three_buttons_spacing" id="phase_delete_btn">
        <a class="btn btn-secondary button_small" data-bs-theme="dark">
            Löschen
        </a>
    </div>
    <div class="three_buttons_spacing" id="phase_cancel_btn">
        <a class="btn btn-secondary button_small" data-bs-theme="dark">
            Abbrechen
        </a>
    </div>
</div>

<!-- add demo material modal -->
<div class="modal fade" id="device-selection-modal" aria-labelledby="DeviceSelectionModal" aria-hidden="true"
    style="margin-top: 15vh;">
    @livewire('device-selection-modal')
</div>

<div class="modal fade" id="demo-material-selection-modal" aria-labelledby="DemoMaterialModal" aria-hidden="true"
    style="margin-top: 15vh;">
    @livewire('demo-material-selection-modal')
</div>


@livewireScripts
@endsection