const demo_materials_save_btn = document.getElementById('demo_materials_save_btn');
const demo_materials_delete_btn = document.getElementById('demo_materials_delete_btn');
const demo_materials_cancel_btn = document.getElementById('demo_materials_cancel_btn');

demo_materials_save_btn.addEventListener('click', demo_materials_new);
demo_materials_delete_btn.addEventListener('click', demo_materials_cancel);
demo_materials_cancel_btn.addEventListener('click', demo_materials_cancel);

// input fields
const demo_material_name = document.getElementById('demo_material_name');
const demo_material_file = document.getElementById('demo_material_file');
const demo_material_description = document.getElementById('demo_material_description');

demo_materials_save_btn.disabled = true;
let demo_material_type_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == 'demo-material-types') {
        demo_material_type_id = pathArray[i+1];
    }
}

demo_material_file.onchange = function () {
    demo_material_name.innerHTML = demo_material_file.files[0].name.replace(/\.[^/.]+$/, ""); // filename without extension
    activate_button();
};

demo_material_description.oninput = function () {
    if (demo_material_description.value != ""){
    }
    activate_button();
};

function activate_button(){
    if (demo_material_description.value != "" && demo_material_file.value != "") {
        demo_materials_save_btn.disabled = false;
    }
    else {
        demo_materials_save_btn.disabled = true;
    }
};

function demo_materials_new(event){
    event.preventDefault();

    const demo_material_name_val = demo_material_name.innerHTML;
    const demo_material_file_val = demo_material_file.files[0];
    const demo_material_description_val = demo_material_description.value;

    let form_data = new FormData();
    form_data.append('name', demo_material_name_val);
    form_data.append('file', demo_material_file_val);
    form_data.append('description', demo_material_description_val);

    fetch('/demo-material-types/' + demo_material_type_id + '/demo-materials', {
        method: 'POST',
        body: form_data
    })
    .then(() => {
        window.location.href = '/demo-material-types/' + demo_material_type_id + '/demo-materials';
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function demo_materials_cancel(event){
    event.preventDefault();

    window.location.href = '/demo-material-types/' + demo_material_type_id + '/demo-materials';
}