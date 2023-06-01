const demo_material_edit_btn = document.getElementById("demo_material_edit_btn");
const demo_material_add_btn = document.getElementById("demo_material_add_btn");

let demo_material_id;

demo_material_edit_btn.addEventListener("click", demo_material_edit_btn);
demo_material_add_btn.addEventListener("click", demo_material_add_btn);

let demo_material_type_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "demo-material-types") {
        demo_material_type_id = pathArray[i+1];
    }
}

demo_material_edit_btn.addEventListener("click", edit_demo_material);
demo_material_add_btn.addEventListener("click", add_demo_material);

function set_demo_material_id(id){
    demo_material_id = id;
}

function edit_demo_material(event){
    event.preventDefault();

    if (demo_material_id != null) {
        window.location.href = "/demo-material-types/" + demo_material_type_id + "/demo-materials/" + demo_material_id + "/edit";
    }
}

function add_demo_material(event){
    event.preventDefault();

    if (demo_material_type_id != null) {
        window.location.href = "/demo-material-types/" + demo_material_type_id + "/demo-materials/new";
    }
}

