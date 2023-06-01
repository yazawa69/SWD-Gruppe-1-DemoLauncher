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
                <div class="overflow_middle">
                    <p>
                        HEDONIST ROOTS
                        Until recently, the prevailing view assumed lorem ipsum was born as a nonsense text. “It's not
                        Latin, though it looks like it"
                    </p>
                </div>
            </div>
        </div>
        <div class="headline_szenario_h3">
            <h3>Phase 1 - {{ $phase->name }} </h3>
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
                            <th>{{ $phase_device->device->name }}</th>
                            <td>
                                @foreach ($phase_device->demoMaterials as $demo_material)
                                <div class="textbox_very_small">
                                    <div class="overflow_very_small">
                                        <p class="text_phase">{{ $demo_material->name }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="steuerung">
            <p class="centered">Steuerung einfügen!</p>
        </div>
        <div class="centered">
            <button onclick="window.location.href='{{ url('/') }}';" class="btn btn-secondary start_end_button"
                type="button" data-bs-theme="dark">
                Beenden
            </button>
        </div>
        @endsection
    </main>
    <footer>

    </footer>
</body>