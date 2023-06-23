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
<script src="{{ asset('js/device-new.js') }}" defer></script>
@endsection


@section('headline')
<div class="headline_new">
    <h1 class="heading">Gerät hinzufügen</h1>
    <h2 class="subheading">{{ $device_type->name }}</h2>
</div>
@endsection
@section('main')
<div class="textbox_middle_main_new">
    <div class="textbox_small_new">
        <div class="overflow_small mb-3" data-bs-theme="dark">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="device_name">Name</label>
                    <input type="Name" class="form-control" id="device_name" placeholder="Bitte ausfüllen">
                </div>
            </div>
        </div>
    </div>
    <div class="textbox_small_new">
        <div class="overflow_small mb-3" data-bs-theme="dark">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="device_oem">Hersteller</label>
                    <input class="form-control" id="device_oem" placeholder="Bitte ausfüllen">
                </div>
            </div>
        </div>
    </div>
    <div class="textbox_small_new">
        <div class="overflow_small mb-3" data-bs-theme="dark">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="device_serial_number">Seriennummer</label>
                    <input class="form-control" type="number" id="device_serial_number" placeholder="Bitte ausfüllen">
                </div>
            </div>
        </div>
    </div>
    <div class="textbox_small_new">
        <div class="overflow_small mb-3" data-bs-theme="dark">
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="device_serial_number">IP-Adresse</label>
                    <input class="form-control" type="number" id="device_ip_address" placeholder="Bitte ausfüllen">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer')
<div class="three_buttons_new">
    <button class="three_buttons_spacing button_small btn btn-secondary" id="device_save_btn" disabled>
        Speichern
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" id="device_delete_btn">
        Löschen
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" id="device_cancel_btn">
        Abbrechen
    </button>
</div>
@endsection