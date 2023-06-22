// Get input fields
const demo_material_name = document.getElementById('demo_material_name');
const demo_material_file = document.getElementById('demo_material_file');
const demo_material_description = document.getElementById('demo_material_description');

// Get buttons
const demo_materials_save_btn = document.getElementById('demo_materials_save_btn');
const demo_materials_delete_btn = document.getElementById('demo_materials_delete_btn');
const demo_materials_cancel_btn = document.getElementById('demo_materials_cancel_btn');

// Add event listeners
demo_materials_save_btn.addEventListener('click', demo_materials_new);
demo_materials_delete_btn.addEventListener('click', demo_materials_cancel);
demo_materials_cancel_btn.addEventListener('click', demo_materials_cancel);

// Get demo_material_type_id from url
let demo_material_type_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == 'demo-material-types') {
        demo_material_type_id = pathArray[i+1];
    }
}

// Called when uploading file, update demo_material_name to file name without extension
demo_material_file.onchange = function () {
    demo_material_name.innerHTML = demo_material_file.files[0].name.replace(/\.[^/.]+$/, ""); // Filename without extension
    activate_button();
};

// Called when changing demo_material_description
demo_material_description.oninput = function () {
    activate_button();
};

// Activate save button when all fields are filled
function activate_button(){
    if (demo_material_description.value != "" && demo_material_file.value != "") {
        demo_materials_save_btn.disabled = false;
    }
    else {
        demo_materials_save_btn.disabled = true;
    }
};

// Create new demo material in database and redirect to demo material list
function demo_materials_new(event){
    event.preventDefault();

    // Get input values
    const demo_material_name_val = demo_material_name.innerHTML;
    const demo_material_file_val = demo_material_file.files[0];
    const demo_material_description_val = demo_material_description.value;

    // Create demo material object
    let form_data = new FormData();
    form_data.append('name', demo_material_name_val);
    form_data.append('file', demo_material_file_val);
    form_data.append('description', demo_material_description_val);

    // Send demo material object to server
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

// Redirect to demo material list
function demo_materials_cancel(event){
    event.preventDefault();

    window.location.href = '/demo-material-types/' + demo_material_type_id + '/demo-materials';
}