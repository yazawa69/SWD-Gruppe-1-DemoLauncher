<div>

    <style>
    .modal-body {
        height: 200px;
    }

    .box_middle {
        margin: 0;
        margin-left: auto;
        margin-right: auto;
        padding: 10px;
        width: 180px;
        height: 55px;


    }

    .selection_text {
        margin: 0;
        margin-top: auto;
        margin-bottom: auto;
        padding: 0;
        height: fit-content;
        font-size: 20px;
    }

    .selection_image {
        margin-top: auto;
        margin-bottom: auto;
        width: 5vw;
        height: 5vw;
    }

    .overflow_middle {
        display: flex;
        height: fit-content;
        width: fit-content;
        margin-left: auto;
        margin-right: auto;
    }

    .overflow_middle_diff {
        display: flex;
        flex-direction: column;
        height: fit-content;
        width: fit-content;
        margin-left: auto;
        margin-right: auto;
        gap: 10px;
    }

    .textbox_middle_main_modal {

        display: flex;
        gap: 30px;
        flex-direction: column;
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
        width: fit-content;

    }

    .headline_modal {
        width: fit-content;

        margin-bottom: 20px;
        margin-left: auto;
        margin-right: auto;
    }

    .button_small_empty {
        width: 25vw;
        height: 50px;
        border-radius: 15px;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        border: solid 3px #03b670;
        border-radius: 15px;
        background-color: #2b3035 !important;
    }

    .button_small {
        width: 25vw;
        height: 50px;
        border-radius: 15px;
        text-align: center;
        background-color: #03b670 !important;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .gapped_flex_container {
        display: flex;
        flex-direction: column;
        gap: 30px;
    }



    .buffering-header {
        margin-left: auto;
        margin-right: auto;
    }

    .textbox_big_popup {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        padding: 15px;
        height: 300px;
        border: solid 3px #03b670;
        border-radius: 15px;
    }

    .modal-header {
        border-color: #495057;
        /* border-bottom: 0 none; */
    }
    .overflow{
        overflow-x: hidden;
        text-overflow: ellipsis;
    }
    .modal-footer {
        border-color: #495057;
        border-top: 0 none;
    }

    .device_select_modal_body {
        height: 60vh;
        background-color: #212529;

    }

    .device_select_modal_header {
        background-color: #212529;
    }
    </style>

    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" data-bs-theme="dark">
        <div class="modal-content border border-secondary ">
            <div class="modal-header device_select_modal_header">
                <h1 class="modal-title fs-5">Demomaterial hinzufügen</h1>
                <button type="button" class="btn-close" wire:click="resetDemoMaterials()" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body device_select_modal_body">

                @if (!$demo_materials)
                <div class="headline_modal">
                    <h1>Demomaterial-Typ</h1>
                </div>
                <div class="gapped_flex_container">
                    @foreach($demo_material_types as $demo_material_type)
                    <div class="box_middle" wire:key="demo_material_type-{{ $demo_material_type->id }}"
                        wire:click="loadDemoMaterials({{ $demo_material_type->id }})">
                        <div class="overflow_middle">
                            <img class="selection_image" src="{{ asset('images/PDF.png') }}"></img>
                            <p class="selection_text text-nowrap">{{ $demo_material_type->filename_extension }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="headline_modal">
                    <h1>{{ $demo_material_type->filename_extension }}</h1>
                </div>
                <div class="textbox_big_popup">
                    <div class="overflow_big">
                        @foreach($demo_materials as $demo_material)
                        <div>
                            <button class="btn btn-secondary list overflow"
                                onclick="add_demo_material({{ $demo_material->id }})">{{ $demo_material->name }}</button>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>