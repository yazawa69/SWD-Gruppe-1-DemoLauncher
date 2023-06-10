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

<style>    

    /* header{
        width: 100vw;
        position: absolute;
        top: 0;
    } */

    .headline_new{
        width: fit-content;
        margin-left: 15vw;
        /* margin-right: auto; */
        /* margin-left: 10vw;
        margin-right: auto; */
        /* background-color: #343a40; */
    }

    .headline_new .heading{
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .headline_new .subheading{
        margin-top: 0;
        padding-top: 0;
        font-size: 1.5rem;
        color: #9a9ea2;
    }

    .textbox_middle_main_new{
        width: 100vw;
        /* margin-top: 5vh; */
    }

</style>


<body>
    <main>
        @section('headline')
        <div class="headline_new">
            <h1 class="heading">Gerät</h1>
            <h2 class="subheading">{{ $device_type->name }}</h2>
        </div>
        @endsection
        @section('content')
        <div class="textbox_middle_main_new">
            <div class="textbox_small">
                <div class="overflow_small mb-3" data-bs-theme="dark">
                    <div class="row g-3 align-items-center hundred">
                        <div class="col-auto">
                            <label>Name:</label>
                            <input type="Name" class="form-control" value="{{ $device->name }}" id="device_name">
                        </div>
                    </div>
                </div>
            </div>
            <div class="textbox_small">
                <div class="overflow_small mb-3" data-bs-theme="dark">
                    <div class="row g-3 align-items-center hundred">
                        <div class="col-auto">
                            <label>Hersteller:</label>
                            <input type="Name" class="form-control" value="{{ $device->oem }}" id="device_oem">
                        </div>
                    </div>
                </div>
            </div>
            <div class="textbox_small">
                <div class="overflow_small mb-3" data-bs-theme="dark">
                    <div class="row g-3 align-items-center hundred">
                        <div class="col-auto">
                            <label>Seriennummer:</label>
                            <input type="Name" class="form-control" value="{{ $device->serial_number }}" id="device_serial_number">
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