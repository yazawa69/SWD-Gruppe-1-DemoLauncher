$(document).ready(function() {
    // $('#device_type_modal').modal('show');
    
    $('#add-phase-device-btn').click(function() {
        console.log('add-phase-device-btn clicked');
        $('#device-type-modal').modal('show');
        // load = "<p>This is content</p>";
        // $('#demo_material_modal .modal-body').html(load);
        // $.get('/device-types', function(response) {
        //     console.log(response);    
        //     load = "<p>This is content</p>";
        //     $('#phase_device_modal .modal-body').load(response);
        // });
        // $('#demo_material_modal .modal-body').load('/demo-materials-types/raw main');
        });
        $('#add-device-btn').click(function() {
            console.log('add-phase-device-btn clicked');
            $('#device_type_modal').modal('hide');
            // load = "<p>This is content</p>";
            // $('#demo_material_modal .modal-body').html(load);
            // $.get('/device-types', function(response) {
            //     console.log(response);    
            //     load = "<p>This is content</p>";
            //     $('#phase_device_modal .modal-body').load(response);
            // });
            // $('#demo_material_modal .modal-body').load('/demo-materials-types/raw main');
            });
    });

