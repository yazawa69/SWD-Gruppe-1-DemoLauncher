// Get scenario_id and phase_id from url
let scenario_id;
let phase_id;
let url = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "scenarios") {
        scenario_id = pathArray[i+1];
    }
    if (pathArray[i] == "phases") {
        phase_id = pathArray[i+1];
    }
}


// Get demo material controls
const demo_material_controls = document.getElementById("demo_material_controls");

// Button id for global access
let button_id;

// Set unique button id for each demo material
function set_button_id(id){
    button_id = id;
}

// demo material selection stuff
// let selected_demo_material_id;

function material_button_click(phase_device_and_material_data){
    selected_phase_device_id = phase_device_and_material_data['phase_device_id']; 
    selected_demo_material_id = phase_device_and_material_data['demo_material_id'];
        
    fetch("/scenarios/" + scenario_id + "/run/phases/" + phase_id + "/phasedevices/" + selected_phase_device_id + "/demomaterials/ "+ selected_demo_material_id + "/load", {
        method: "GET",
    })
    .then(() => {
        console.log("success")
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });


    console.log(phase_device_and_material_data);
    set_demo_material_name(phase_device_and_material_data['demo_material_name']);
}

// Called when selecting new demo material, set demo material name in phase overview
function set_demo_material_name(name){
    // Get demo material name
    const demo_material_name = name;
    // Set demo material name in corresponding button
    const button = document.getElementById("button_" + button_id);
    button.innerHTML = demo_material_name;
};

// Show or hide demo material controls
function toggle_demo_material_controls() {
    if (demo_material_controls.hidden == true) {
        demo_material_controls.hidden = false;
    }
    else {
        demo_material_controls.hidden = true;
    }
};
