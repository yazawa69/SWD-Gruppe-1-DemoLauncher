@extends('base')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Szenario läuft" />
<meta name="author" content="Mattis Petroll, Guido Grün" />
<meta name="copyright" content="Mattis Petroll, Guido Grün" />
<title>Szenario läuft</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="{{ asset('js/scenario-run.js') }}" defer></script>
@endsection


@section('headline')
<div class="headline_new">
    <h1 class="heading">Szenario läuft</h1>
    <h2 class="subheading">
        <div class="text_no_overflow_ellipsis_running"> {{ $scenario->name }} </div>
    </h2>
</div>
@endsection

@section('main')
<div class="textbox_middle_main_new">
    <div class="textbox_middle_new">
        <div class="overflow_middle_running">
            <p class="word">
                {{ $scenario->description }}
            </p>
        </div>
    </div>
</div>

{{-- create the initial carousel slide --}}
<div id="carouselExample" class="carousel slide" data-interval="false">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="textbox_big_headline">
                <h3>{{ $phase->name }}</h3>
            </div>
            <div class="textbox_big_szenario_running" data-bs-theme="dark">
                <div class="overflow_big_szenario">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Steuerung</th>
                                <th>Auswahl</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($x = 0; $x < count($phase_devices); $x++) <tr>
                                <th>
                                    <button class="btn btn-secondary button_very_small_outline" id="device_btn_{{ 0 }}_{{ $x }}" data-bs-theme="dark" onclick="toggle_demo_material_controls(0, {{ $x }})" >{{
                                        $phase_devices[$x]->device->name }}
                                    </button>
                                </th>

                                @if($phase_devices[$x]->demoMaterials()->exists())
                                <td> 
                                    <button class="btn btn-secondary button_very_small_outline" data-bs-toggle="modal"
                                    data-bs-target="#RunningPopUp{{ 0 . $x }}" id="demo_material_0_{{ $x }}"
                                    onclick="set_button_id(0, {{ $x }})">
                                        {{ $phase_devices[$x]->demoMaterials[0]->name }}
                                    </button>
                                    <p clasS="button_very_small_number"> {{ count($phase_devices[$x]->demoMaterials)-1 }} weitere</p>
                                </td>
                                @else
                                <td> 
                                    <button class="btn btn-secondary button_very_small_outline" data-bs-toggle="modal"
                                    data-bs-target="#RunningPopUp{{ 0 . $x }}" id="demo_material_0_{{ $x }}"
                                    onclick="set_button_id(0, {{ $x }})">
                                        Auswählen
                                    </button>
                                </td>
                                @endif
                                @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- create carousel items for each phase --}}
        @for($i = 1; $i < count($phases); $i++) <div class="carousel-item">
            <div class="textbox_big_headline">
                <h3>{{ $phases[$i]->name }}</h3>
            </div>
            <div class="textbox_big_szenario_running" data-bs-theme="dark">
                <div class="overflow_big_szenario_new">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Steuerung</th>
                                <th>Auswahl</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $phase_devices = $phases[$i]->phaseDevices;
                            @endphp
                            @for ($x = 0; $x < count($phase_devices); $x++)
                            <tr>
                                <th>
                                    <button class="btn btn-secondary button_very_small_outline" id="device_btn_{{ $i }}_{{ $x }}" data-bs-theme="dark" onclick="toggle_demo_material_controls({{ $i }}, {{ $x }})">{{
                                        $phase_devices[$x]->device->name }}
                                    </button>
                                </th>
                                @if($phase_devices[$x]->demoMaterials()->exists())

                                <td>
                                    <button class="btn btn-secondary button_very_small_outline" data-bs-toggle="modal"
                                    data-bs-target="#RunningPopUp{{ $i.$x }}" id="demo_material_{{ $i }}_{{ $x }}" onclick="set_button_id({{ $i }}, {{ $x }})">
                                        {{ $phase_devices[$x]->demoMaterials[0]->name }}
                                    </button>
                                    <p clasS="button_very_small_number"> {{ count($phase_devices[$x]->demoMaterials)-1 }} weitere</p>
                                </td>
                                @else
                                <td> 
                                    <button class="btn btn-secondary button_very_small_outline" data-bs-toggle="modal"
                                    data-bs-target="#RunningPopUp{{ $i.$x }}" id="demo_material_{{ $i }}_{{ $x }}"
                                    onclick="set_button_id({{ $i }}, {{ $x }})">
                                        Auswählen
                                    </button>
                                </td>
                                @endif
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    @endfor
</div>

<button class="carousel-control-prev carousel_arrow" type="button">
    <img class="pfeil_image_links" aria-hidden="true" src="{{ asset('images/CarousellPfeilLinks.png') }}" data-bs-target="#carouselExample" data-bs-slide="prev" id="carousel_prev_btn"></img>
</button>
<button class="carousel-control-next carousel_arrow" type="button">
    <img class="pfeil_image_rechts" aria-hidden="true" src="{{ asset('images/CarousellPfeilRechts.png') }}" data-bs-target="#carouselExample" data-bs-slide="next" id="carousel_next_btn"></img>
</button>



<div class="steuerung" id="demo_material_controls" hidden>
    <button class="btn"><img src="{{ asset('images/iconback.png') }}" alt=""></button>
    <button class="btn play" id="playButton" onclick="toggleImage()"><img src="{{ asset('images/iconplay.png') }}" alt=""></button>
    <button class="btn pause" id="pauseButton" onclick="toggleImage()"><img src="{{ asset('images/iconpause.png') }}" alt=""></button>
    <button class="btn"><img src="{{ asset('images/iconforward.png') }}" alt=""></button>
</div>
@endsection

@section('footer')
<div class="centered">
    <button class="btn btn-secondary start_end_button_new"
        type="button" data-bs-theme="dark" data-bs-toggle="modal"
        data-bs-target="#exit_modal">
        Beenden
    </button>
</div>
@endsection

@section('modals')
{{-- create modal for each phase device x in each phase i --}}
@for($i = 0; $i < count($phases); $i++) 
    @php 
    $phase_devices=$phases[$i]->phaseDevices;
    @endphp
    @for ($x=0; $x < count($phase_devices); $x++) <div class="modal fade" id="RunningPopUp{{ $i.$x }}" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-theme="dark">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Material auswählen</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="textbox_big_popup">
                        <div class="overflow_big">
                            <div>
                                @php
                                    $phase_device = $phase_devices[$x];
                                @endphp
                                {{-- regular materials logic --}}
                                @foreach($phase_device->demoMaterials as $demo_material)
                                    @php
                                    $phase_device_and_material_data = json_encode([
                                        'phase_device_id' => $phase_device->id,
                                        'live_stream_device_id' => null,
                                        'demo_material_id' => $demo_material->id,
                                        'demo_material_name' => $demo_material->name
                                    ])
                                    @endphp
                                    <button class="btn btn-secondary list" data-bs-dismiss="modal"
                                        onclick="material_button_click({{ $phase_device_and_material_data }})">{{ $demo_material->name
                                    }}</button>
                                @endforeach
                                {{-- livestream logic --}}
                                @php
                                    $curr_phase_device_id = $phase_device->id;
                                    $curr_device_type_name = $phase_device->device->deviceType->name;
                                @endphp
                                @if ($curr_device_type_name == "TV")
                                @foreach ($phase_devices as $phase_device)
                                    @php
                                        $device = $phase_device->device;
                                        $deviceType = $device->deviceType;
                                    @endphp
                                    @if ($deviceType->name == "VR")
                                        @php
                                        $phase_device_and_material_data = json_encode([
                                            'phase_device_id' => $curr_phase_device_id,
                                            'live_stream_device_id' => $phase_device->id,
                                            'demo_material_id' => 1,
                                            'demo_material_name' => $device->name. " live"
                                        ])
                                        @endphp
                                        <button class="btn btn-secondary list" data-bs-dismiss="modal"
                                        onclick="material_button_click({{ $phase_device_and_material_data }})">{{ $device->name. " live"
                                        }}</button> 
                                    @endif
                                @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endfor
@endfor

<!-- add end scenario modal -->
<div class="modal fade" id="exit_modal" tabindex="-1" aria-labelledby="exitModal" aria-hidden="true"
    data-bs-theme="dark">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="scenarioModal">Szenario wirklich beenden?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn button_small_popup btn-secondary"
                    data-bs-dismiss="modal">Abbrechen</button>
                <button id="end_scenario_button" type="button" class="btn button_small_popup btn-secondary"
                onclick="window.location.href='{{ url('/') }}';">Beenden</button>
            </div>
        </div>
    </div>
</div>
@endsection