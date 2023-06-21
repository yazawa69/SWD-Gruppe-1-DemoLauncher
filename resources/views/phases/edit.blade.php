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
<script src="{{ asset('js/phase-edit.js') }}" defer></script>
@livewireStyles
@endsection

@section('headline')
    <div class="headline_new">
        <h1 class="heading">Phase bearbeiten</h1>
        <h2 class="subheading"></h2>
    </div>
@endsection

@section('main')
<div class="textbox_middle_main_new">
    <div class="textbox_small_new">
        <div class="overflow_small mb-3" data-bs-theme="dark">
            <div class="hundred vertically_centered">
                <div class="hundred"> 
                    <label>Titel</label>
                    <input type="Name" class="form-control" value="{{ $phase->name }}" id="phase_name">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="textbox_big_headline">
    <h4> <div class="elemente">
        {{ $phase->name }}
        </div>Elemente
    </h4>
</div>
<div class="textbox_big_phase_verwalten_new">
    <div class="overflow_big_phase no_sidescroll" data-bs-theme="dark">
        <div class="">
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
                        <th>
                            <div class="margin">
                                <div class="overflow_very_small_warp">
                                    <div class="text_no_overflow_ellipsis_phase_edit">{{ $phase_devices[$i]->device->name }} </div>
                                    <img class="image_2 inline" src="{{ asset('images/X-Icon.png') }}" onclick="phase_device_remove({{ $phase_devices[$i]->id }})"></img>
                                </div>
                            </div>
                        </th>
                        <td>
                            @foreach ($phase_devices[$i]->demoMaterials as $demo_material)
                            @php
                            $demo_material_data = json_encode(['phase_device_id' => $phase_devices[$i]->id, 'demo_material_id' => $demo_material->id]);
                            @endphp
                            <div class="textbox_very_small">
                                <div class="overflow_very_small">
                                    <p class="text_phase text_no_overflow_ellipsis_2">{{ $demo_material->name }}</p>
                                    <img class="image_2" src="{{ asset('images/X-Icon.png') }}"
                                        onclick="demo_material_remove({{ $demo_material_data }})"></img>
                                </div>
                            </div>
                            @endforeach
                            <div class="textbox_very_small">
                                <div class="centered" data-bs-toggle="modal"
                                    data-bs-target="#demo-material-selection-modal"
                                    onclick="set_phase_device_id({{ $phase_devices[$i]->id }})">
                                    <img class="image_2" src="{{ asset('images/Pluszeichen.png') }}"></img>
                                </div>
                            </div>
                        </td>
                        </tr>
                        @endfor
                </tbody>
            </table>
        </div>
    </div>
</div>
<button class="btn btn-secondary other_button_small_new" id="add-phase-device-btn" data-bs-toggle="modal" data-bs-target="#device-selection-modal" data-bs-theme="dark">
    <img class="plus_image" src="{{ asset('images/Pluszeichen.png') }}" onclick="enable_button()"></img>
    Gerät
</button>
@endsection

@section('footer')
<div class="three_buttons_new">
    <button class="three_buttons_spacing button_small btn btn-secondary" id="phase_save_btn" disabled>
        Speichern
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" data-bs-toggle="modal"
        data-bs-target="#phase_delete_modal">
        Löschen
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" id="phase_cancel_btn">
        Abbrechen
    </button>
</div>
@endsection

@section('modals')
<!-- add demo material modal -->
<div class="modal fade" data-bs-theme="dark" id="device-selection-modal" aria-labelledby="DeviceSelectionModal" aria-hidden="true"
    style="margin-top: 15vh;">
    @livewire('device-selection-modal')
</div>

<div class="modal fade" id="demo-material-selection-modal" aria-labelledby="DemoMaterialModal" aria-hidden="true"
    style="margin-top: 15vh;">
    @livewire('demo-material-selection-modal')
</div>

<!-- add phase delete modal -->
<div class="modal fade" id="phase_delete_modal" tabindex="-1" aria-labelledby="scenarioModal" aria-hidden="true"
    data-bs-theme="dark">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="scenarioModal">Phase wirklich löschen?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button_small_popup btn-secondary"
                    data-bs-dismiss="modal">Abbrechen</button>
                <button type="button" class="btn button_small_popup btn-secondary" id="phase_delete_btn">Löschen</button>
            </div>
        </div>
    </div>
</div>

@livewireScripts
@endsection