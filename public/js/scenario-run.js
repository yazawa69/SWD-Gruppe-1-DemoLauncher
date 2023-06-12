let button_id;

function set_button_id(id){
    button_id = id;
}

function set_demo_material_name(demo_material_data){
    const demo_material_name = demo_material_data['demo_material_name'];
    const button = document.getElementById("button_" + button_id);
    button.innerHTML = demo_material_name;
};