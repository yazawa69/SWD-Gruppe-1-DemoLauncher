<style>

    .modal-body{
        height: 200px;
    }

    .box_middle {
        /* margin-left: auto;
        margin-right: auto;
        margin-top: 0vh;
        margin-bottom: 0vh;
        width: 50vw;
        padding: 0px;
        height: 20px;
        border: solid 3px #03b670;
        border-radius: 5px; */
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
        margin-bottom:auto;
        padding: 0;
        height: fit-content;
        font-size: 20px;
    }
    .selection_image {
        margin-top: auto;
        margin-bottom:auto;
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
    .textbox_middle_main_modal{
        
        display: flex;
        gap: 20px;
        flex-direction: column;
        justify-content: center;
        margin: 0;
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

</style>

<div class="modal fade" id="device-type-modal" tabindex="-1" aria-labelledby="DeviceTypeModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="deviceTypeModal">Gerät hinzufügen</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="headline_modal">
                <h1>Gerätekategorie</h1>
            </div>
            <div class="textbox_middle_main_modal" >
                @foreach($device_types as $device_type)
                <div class="box_middle">
                    <div onclick="set_scenario_id({{ $scenario->id }})" data-bs-dismiss="modal" class="overflow_middle">
                        <img class="selection_image" src="../images/Bildschirm.png"></img>
                        <p class="selection_text text-nowrap">{{ $device_type->name }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary button_small_empty" data-bs-dismiss="modal">Schließen</button>
            <button type="button" class="btn btn-primary button_small" id="create_scenario_btn">Erstellen</button>
        </div>
        </div>
    </div>
</div>





