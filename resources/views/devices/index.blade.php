@extends('base')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Geräte verwalten" />
<meta name="author" content="Mattis Petroll, Guido Grün" />
<meta name="copyright" content="Mattis Petroll, Guido Grün" />
<title>Geräte verwalten</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="{{ asset('js/device-index.js') }}" defer></script>
@endsection

<body>
    <main>
        @section('content')
        <div class="headline">
            <h1>Geräte</h1>
        </div>
        <div class="textbox_big">
            <div class="overflow_big">
                <div>
                    @foreach($devices as $device)
                    <button class="btn btn-secondary list"
                        onclick="set_device_id({{ $device->id }})">{{ $device->name }}</button>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="centered button_middle_main1" id="device_edit_btn">
            <a class="btn btn-secondary button_middle" href="#" data-bs-theme="dark">
                Gerät bearbeiten
            </a>
        </div>
        <div class="centered button_middle_main2" id="device_add_btn">
            <a class="btn btn-secondary button_middle" href="#" data-bs-theme="dark">
                Gerät hinzufügen
            </a>
        </div>
        @endsection
    </main>
    <footer>

    </footer>
</body>

</html>