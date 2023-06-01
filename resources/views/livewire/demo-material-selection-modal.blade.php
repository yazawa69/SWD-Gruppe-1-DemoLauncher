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

        .device_select_modal_body {
            height: 40vh;
        }

        .buffering-header {
            margin-left: auto;
            margin-right: auto;
        }

    </style>

    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
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
                    <div class="box_middle" wire:click="loadDemoMaterials({{ $demo_material_type->id }})">
                        <div class="overflow_middle">
                            <img class="selection_image" src="../images/Bildschirm.png"></img>
                            <p class="selection_text text-nowrap">{{ $demo_material_type->filename_extension }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="headline_modal">
                    <h1>{{ $demo_material_type->filename_extension }}</h1>
                </div>
                <div class="textbox_middle_main_modal">
                    <div class="gapped_flex_container">
                        @foreach($demo_materials as $demo_material)
                        <div class="box_middle">
                            <div class="overflow_middle">
                                <img class="selection_image" src="../images/Bildschirm.png"></img>
                                <p class="selection_text text-nowrap">{{ $demo_material->name }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
</div>
