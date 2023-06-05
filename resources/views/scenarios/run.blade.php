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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
@endsection

<body>
    <main>
        @section('content')
        <div class="headline">
            <h1>Szenario läuft</h1>
        </div>
        <div class="textbox_middle_main">
            <div class="textbox_middle">
                <div class="overflow_middle_running">
                    <p>
                        {{ $scenario->description}}
                    </p>
                </div>
            </div>
        </div>

        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="headline_szenario_h3">
                        <h3>{{ $phase->name }}</h3>
                    </div>
                    <div class="textbox_big_szenario" data-bs-theme="dark">
                        <div class="overflow_big_szenario">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Auswahl</th>
                                        <th>Steuerung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($phase_devices as $phase_device)
                                    <tr>
                                        <th><button class="btn btn-secondary button_very_small_outline"
                                                data-bs-theme="dark">{{ $phase_device->device->name }}</button></th>
                                        <td>
                                            @foreach ($phase_device->demoMaterials as $demo_material)
                                        <td data-bs-toggle="modal" data-bs-target="#RunningPopUp">
                                            {{ $demo_material->name }}</td>
                                        @endforeach
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @for($i = 1; $i < count($phases); $i++)
                    <div class="carousel-item">
                        <div class="headline_szenario_h3">
                            <h3>{{ $phases[$i]->name }}</h3>
                        </div>
                        <div class="textbox_big_szenario" data-bs-theme="dark">
                            <div class="overflow_big_szenario">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Auswahl</th>
                                            <th>Steuerung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($phases[$i]->phaseDevices as $phase_device)
                                        <tr>
                                            <th><button class="btn btn-secondary button_very_small_outline"
                                                    data-bs-theme="dark">{{ $phase_device->device->name }}</button>
                                            </th>
                                            <td>
                                                @foreach ($phase_device->demoMaterials as $demo_material)
                                            <td data-bs-toggle="modal" data-bs-target="#RunningPopUp">
                                                {{ $demo_material->name }}</td>
                                            @endforeach
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endfor

                <button class="carousel-control-prev fixed" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                <button class="carousel-control-next fixed" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="modal fade" id="RunningPopUp" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true" data-bs-theme="dark">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Material auswählen</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="textbox_big_popup">
                                <div class="overflow_big">
                                    <div>
                                        @foreach($phase_device->demoMaterials as $demo_material)
                                        <button class="btn btn-secondary list"
                                            data-bs-dismiss="modal">{{ $demo_material->name }}</button>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="steuerung">
                <button class="btn"><img src="../images/iconback.png" alt=""></button>
                <button class="btn"><img src="../images/iconplay.png" alt=""></button>
                <button class="btn"><img src="../images/iconforward.png" alt=""></button>
            </div>
            <div class="centered">
                <button onclick="window.location.href='{{ url('/') }}';" class="btn btn-secondary start_end_button"
                    type="button" data-bs-theme="dark">
                    Beenden
                </button>
            </div>
        </div>
        @endsection
    </main>
    <footer>

    </footer>
</body>