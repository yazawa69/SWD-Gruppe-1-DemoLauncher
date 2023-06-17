// Get buttons
const demo_material_edit_btn = document.getElementById("demo_material_edit_btn");
const demo_material_add_btn = document.getElementById("demo_material_add_btn");

// Add event listeners
demo_material_edit_btn.addEventListener("click", edit_demo_material);
demo_material_add_btn.addEventListener("click", add_demo_material);

// Demo material id for global access
let demo_material_id;

// Get demo material type id from url
let demo_material_type_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "demo-material-types") {
        demo_material_type_id = pathArray[i+1];
    }
}

// Called when selecting demo material from list, enable edit button
function set_demo_material_id(id){
    demo_material_id = id;
    demo_material_edit_btn.disabled = false;
}

// Redirect to edit demo material page with selected demo material id
function edit_demo_material(event){
    event.preventDefault();

    if (demo_material_id != null) {
        window.location.href = "/demo-material-types/" + demo_material_type_id + "/demo-materials/" + demo_material_id + "/edit";
    }
}

// Redirect to add demo material page
function add_demo_material(event){
    event.preventDefault();

    if (demo_material_type_id != null) {
        window.location.href = "/demo-material-types/" + demo_material_type_id + "/demo-materials/new";
    }
}

