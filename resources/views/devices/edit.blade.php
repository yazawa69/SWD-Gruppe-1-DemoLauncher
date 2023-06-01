@extends('base')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Gerät" />
<meta name="author" content="Mattis Petroll, Guido Grün" />
<meta name="copyright" content="Mattis Petroll, Guido Grün" />
<title>Gerät</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="{{ asset('js/device-edit.js') }}" defer></script>
@endsection

<body>
    <main>
        @section('content')
        <div class="headline">
            <h1>Gerät</h1>
        </div>
        <div class="textbox_middle_main">
            <div class="textbox_small">
                <div class="overflow_small mb-3" data-bs-theme="dark">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <p id="device_name">{{ $device->name }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="textbox_small">
                <div class="overflow_small mb-3" data-bs-theme="dark">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <p id="device_oem">{{ $device->oem }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="textbox_small">
                <div class="overflow_small mb-3" data-bs-theme="dark">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <p id="device_serial_number">{{ $device->serial_number }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="three_buttons">
            <div class="three_buttons_spacing" id="device_save_btn">
                <a class="btn btn-secondary button_small" data-bs-theme="dark">
                    Speichern
                </a>
            </div>
            <div class="three_buttons_spacing" id="device_delete_btn">
                <a class="btn btn-secondary button_small" data-bs-theme="dark">
                    Löschen
                </a>
            </div>
            <div class="three_buttons_spacing" id="device_cancel_btn">
                <a class="btn btn-secondary button_small" data-bs-theme="dark">
                    Abbrechen
                </a>
            </div>
        </div>
        @endsection
    </main>
    <footer>
    </footer>
</body>

</html>