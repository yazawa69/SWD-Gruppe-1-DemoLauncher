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

console.log(demo_material_type_id);
console.log(demo_material_id);

function demo_materials_new(event){
    event.preventDefault();

    const demo_material_name = document.getElementById('demo_material_name').innerHTML;
    const demo_material_file = document.getElementById('demo_material_file');
    const demo_material_description = document.getElementById('demo_material_description').innerHTML;

    const demo_material = {
        name: demo_material_name,
        file: demo_material_file,
        description: demo_material_description
    };

    fetch('/demo-material-types/' + demo_material_type_id + '/demo-materials', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(demo_material)
    })
    .then(() => {
        // window.location.href = '/scenarios/' + scenario_id + '/edit';
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function demo_materials_cancel(event){
    event.preventDefault();

    window.location.href = '/demo-material-types/' + demo_material_type_id + '/demo-materials';
}