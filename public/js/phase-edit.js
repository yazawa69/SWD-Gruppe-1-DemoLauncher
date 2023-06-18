// Get input field
const phase_name = document.getElementById("phase_name");

// Get input value
const phase_name_val = phase_name.value;

// Get buttons
const phase_save_btn = document.getElementById("phase_save_btn");
const phase_delete_btn = document.getElementById("phase_delete_btn");
const phase_cancel_btn = document.getElementById("phase_cancel_btn");

// Add event listeners
phase_save_btn.addEventListener("click", phase_save);
phase_delete_btn.addEventListener("click", phase_delete);
phase_cancel_btn.addEventListener("click", phase_cancel);

// Phase id for global access
let phase_device_id;

// Get scenario_id and phase_id from url
let scenario_id;
let phase_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "scenarios") {
        scenario_id = pathArray[i+1];
    }
    if (pathArray[i] == "phases") {
        phase_id = pathArray[i+1];
    }
}

// Save phase to database and redirect to scenario edit page
function phase_save(event){
    event.preventDefault();

    // Get input value
    const phase_name_value = phase_name.value;

    // Create phase object
    const phase = {
        name: phase_name_value
    }

    // Send phase object to server
    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id, {
        method: "PATCH",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(phase)
    })
    .then(() => {
        window.location.href = "/scenarios/" + scenario_id + "/edit";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

// Delete phase from database and redirect to scenario edit page
function phase_delete(event){
    event.preventDefault();

    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id, {
        method: "DELETE"
    })
    .then(() => {
        window.location.href = "/scenarios/" + scenario_id + "/edit";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

// Redirect to scenario edit page
function phase_cancel(event){
    event.preventDefault();

    window.location.href = "/scenarios/" + scenario_id + "/edit";
}

// Called when selecting phase_device, set phase_device_id to id of selected phase_device
function set_phase_device_id(id) {
    phase_device_id = id;
}

// Add phase_device to phase and reload page
function add_phase_device(device_id){
    
    // Create phase_device object
    const phase_device = {
        phase_id: phase_id,
        device_id: device_id
    }

    // Send phase_device object to server
    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id + "/phasedevices", {
        
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(phase_device)
    })
    .then(() => {
        location.reload();
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });

}

// Redirect to scenario edit page
function phase_cancel(event){
    event.preventDefault();

    window.location.href = "/scenarios/" + scenario_id + "/edit";
}

// Add demo_material to selected phase_device and reload page
function add_demo_material(demo_material_id){
    
    // Create demo material object
    const demo_material = {
        demo_material_id: demo_material_id
    }

    // Send demo material object to server
    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id + "/phasedevices/" + phase_device_id + "/demomaterials", {
        
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(demo_material)
    })
    .then(() => {
        location.reload();
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });

}

// Remove phase_device from phase and reload page
function phase_device_remove(phase_device_id){
    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id + "/phasedevices/" + phase_device_id, {
        method: "DELETE"
    })
    .then(() => {
        location.reload();
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

// Remove demo_material from phase_device and reload page
function demo_material_remove(demo_material_data){
    // Get phase_device_id and demo_material_id from demo_material_data
    phase_device_id = demo_material_data['phase_device_id'];
    demo_material_id = demo_material_data['demo_material_id'];


    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id + "/phasedevices/" + phase_device_id + "/demomaterials/" + demo_material_id, {
        method: "DELETE"
    })
    .then(() => {
        location.reload();
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}