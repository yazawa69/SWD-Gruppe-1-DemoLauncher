@extends('base')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Demomaterial verwalten" />
<meta name="author" content="Mattis Petroll, Guido Grün" />
<meta name="copyright" content="Mattis Petroll, Guido Grün" />
<title>Demomaterial verwalten</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="{{ asset('js/demo-material-index.js') }}" defer></script>
@endsection


@section('headline')
<div class="headline_new">
    <h1 class="heading">Demomaterial verwalten</h1>
    <h2 class="subheading">{{ $demo_material_type->filename_extension }}</h2>
</div>
@endsection
@section('main')
<div class="textbox_big_new">
    <div class="overflow_big">
        <div>
            @foreach($demo_materials as $demo_material)
            <button onclick="set_demo_material_id({{ $demo_material->id }})"
                class="btn btn-secondary list">{{ $demo_material->name }}</button>
            @endforeach
        </div>
    </div>
</div>
<button class="centered_new  btn btn-secondary button_middle_new middle_button_extra_positioner" id="demo_material_edit_btn" disabled>
    Material bearbeiten
</button>
<button class="centered_new  btn btn-secondary button_middle_new middle_button_extra_positioner" id="demo_material_add_btn">
    Material hinzufügen
</button>
@endsection