@extends('base')

@section('head')
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Demomaterial" />
<meta name="author" content="Mattis Petroll, Guido Grün" />
<meta name="copyright" content="Mattis Petroll, Guido Grün" />
<title>Demomaterial</title>
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<script src="{{ asset('js/demo-material-new.js') }}" defer></script>
@endsection

@section('headline')
<div class="headline_new">
    <h1 class="heading">Demomaterial hinzufügen</h1>
    <h2 class="subheading ">{{ $demo_material_type->filename_extension }}</h2>
</div>
@endsection
@section('main')
<div class="textbox_middle_main_new">
    <div class="textbox_small_new">
        <div class="vertically_centered mb-3" data-bs-theme="dark">
            <div class="row g-3 align-items-center text_no_overflow_ellipsis_2">
                <div class="col-auto">
                    <label for="demo_material_name">Datei</label>
                    <p id="demo_material_name">Bitte Datei hochladen...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="textbox_small_new">
        <div class="vertically_centered mb-3" data-bs-theme="dark">
            <div class="row g-3 align-items-center">
            <input name="file" class="form-control" type="file" accept="{{ $demo_material_type->filename_extension }}" id="demo_material_file">
        </div>
        </div>
    </div>
</div>
<div class="textbox_big_main_new">
    <div class="textbox_big_new">
        <div class="overflow_big" data-bs-theme="dark">
            <label for="demo_material_desc">Beschreibung</label>
            <textarea name="description" class="form-control description" id="demo_material_description"></textarea>
        </div>
    </div>
</div>
@endsection
@section('footer')
<div class="three_buttons_new">
    <button class="three_buttons_spacing button_small btn btn-secondary" id="demo_materials_save_btn" disabled>
        Speichern
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" id="demo_materials_delete_btn">
        Löschen
    </button>
    <button class="three_buttons_spacing button_small btn btn-secondary" id="demo_materials_cancel_btn">
        Abbrechen
    </button>
</div>
@endsection
