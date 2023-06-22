// Get demo material controls
const demo_material_controls = document.getElementById("demo_material_controls");

// Button id for global access
let button_id;

// Set unique button id for each demo material
function set_button_id(id){
    button_id = id;
}

// dmeo material selection stuff
// let selected_demo_material_id;

function material_button_click(demo_material_data){
    selected_demo_material_id = demo_material_data['demo_material_id'];
    
    console.log(selected_demo_material_id);
    set_demo_material_name(demo_material_data['demo_material_name']);

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
