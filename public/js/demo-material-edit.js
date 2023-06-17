// Get buttons
const save_btn = document.getElementById("demo_material_save_btn");
const delete_btn = document.getElementById("demo_material_delete_btn");
const cancel_btn = document.getElementById("demo_material_cancel_btn");

// Add event listeners
save_btn.addEventListener("click", demo_material_save);
delete_btn.addEventListener("click", demo_material_delete);
cancel_btn.addEventListener("click", demo_material_cancel);


// Get input fields
const demo_material_name = document.getElementById('demo_material_name');
const demo_material_file = document.getElementById('demo_material_file');
const demo_material_description = document.getElementById('demo_material_description');

// Get demo_material_type_id and demo_material_id from url
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

// Set demo_material_name to uploaded file name
demo_material_file.onchange = function () {
    demo_material_name.innerHTML = demo_material_file.files[0].name.replace(/\.[^/.]+$/, ""); // filename without extension
}

// Save demo_material in database and redirect to previous page
function demo_material_save(event){
    event.preventDefault();

    // Get input values
    const demo_material_name_val = demo_material_name.innerHTML;
    const demo_material_file_val = demo_material_file.files[0];
    const demo_material_description_val = demo_material_description.value;

    // Create form data from input values
    let form_data = new FormData();
    form_data.append('name', demo_material_name_val);
    form_data.append('file', demo_material_file_val);
    form_data.append('description', demo_material_description_val);

    // Send form data to server
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

// Delete demo_material from database and redirect to previous page
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

// Redirect to previous page
function demo_material_cancel(event){
    event.preventDefault();

    window.location.href = "/demo-material-types/" + demo_material_type_id + "/demo-materials/";
}