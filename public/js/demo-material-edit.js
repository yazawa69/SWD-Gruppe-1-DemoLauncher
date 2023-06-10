const save_btn = document.getElementById("demo_material_save_btn");
const delete_btn = document.getElementById("demo_material_delete_btn");
const cancel_btn = document.getElementById("demo_material_cancel_btn");

save_btn.addEventListener("click", demo_material_save);
delete_btn.addEventListener("click", demo_material_delete);
cancel_btn.addEventListener("click", demo_material_cancel);


// input fields
const demo_material_name = document.getElementById('demo_material_name');
const demo_material_file = document.getElementById('demo_material_file');
const demo_material_description = document.getElementById('demo_material_description');

let demo_material_type_id;
let demo_material_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "demo-material-types") {
        demo_material_type_id = pathArray[i + 1];
    }
    if (pathArray[i] == "demo-materials") {
        demo_material_id = pathArray[i + 1];
    }
}


demo_material_file.onchange = function () {
    demo_material_name.innerHTML = demo_material_file.files[0].name;
};


function demo_material_save(event){
    event.preventDefault();

    const demo_material_name_val = demo_material_name.innerHTML;
    const demo_material_file_val = demo_material_file.files[0];
    const demo_material_description_val = demo_material_description.value;

    let form_data = new FormData();
    form_data.append('name', demo_material_name_val);
    form_data.append('file', demo_material_file_val);
    form_data.append('description', demo_material_description_val);

    fetch('/demo-material-types/' + demo_material_type_id + '/demo-materials/' + demo_material_id + '/update', {
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

function demo_material_delete(event){
    event.preventDefault();

    fetch("/demo-material-types/" + demo_material_type_id + "/demo-materials/" + demo_material_id, {
        method: "DELETE"
    })
    .then(() => {
        window.location.href = "/demo-material-types/" + demo_material_type_id + "/demo-materials/";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function demo_material_cancel(event){
    event.preventDefault();

    window.location.href = "/demo-material-types/" + demo_material_type_id + "/demo-materials/";
}