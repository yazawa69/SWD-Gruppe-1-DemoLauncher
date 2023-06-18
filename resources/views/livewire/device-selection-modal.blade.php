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
    </style>


    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Gerät hinzufügen</h1>
                <button type="button" class="btn-close" wire:click="resetDevices()" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body device_select_modal_body">
                @if (!$devices)
                <div class="headline_modal">
                    <h1>Geräte-Typ</h1>
                </div>
                <div class="gapped_flex_container">
                    @foreach($device_types as $device_type)
                    <div class="box_middle text_no_overflow_ellipsis_2" wire:key="device_type-{{ $device_type->id }}"
                        wire:click="loadDevices({{ $device_type->id }})">
                        <div class="overflow_middle">
                            <img class="selection_image" src="{{ asset('images/Bildschirm.png') }}"></img>
                            <p class="selection_text text-nowrap">{{ $device_type->name }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="headline_modal">
                    <h1>{{ $device_type->name }}</h1>
                </div>
                <div class="textbox_middle_main_modal">
                    <div class="gapped_flex_container">
                        @foreach($devices as $device)
                        <div class="box_middle text_no_overflow_ellipsis_2" wire:key="device-{{ $device->id }}"
                            onclick="add_phase_device({{ $device->id }})">
                            <div class="overflow_middle">
                                <img class="selection_image" src="{{ asset('images/Bildschirm.png') }}"></img>
                                <p class="selection_text text-nowrap">{{ $device->name }}</p>
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
