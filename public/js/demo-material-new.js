const demo_materials_save_btn = document.getElementById('demo_materials_save_btn');
const demo_materials_delete_btn = document.getElementById('demo_materials_delete_btn');
const demo_materials_cancel_btn = document.getElementById('demo_materials_cancel_btn');

demo_materials_save_btn.addEventListener('click', demo_materials_new);
demo_materials_delete_btn.addEventListener('click', demo_materials_cancel);
demo_materials_cancel_btn.addEventListener('click', demo_materials_cancel);

let demo_material_type_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == 'demo-material-types') {
        demo_material_type_id = pathArray[i+1];
    }
}

function demo_materials_new(event){
    event.preventDefault();

    const demo_material_name = document.getElementById('demo_material_name').value;
    const demo_material_file = document.getElementById('demo_material_file').files[0];
    const demo_material_description = document.getElementById('demo_material_description').value;

    let form_data = new FormData();
    form_data.append('name', demo_material_name);
    form_data.append('file', demo_material_file);
    form_data.append('description', demo_material_description);

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