const save_btn = document.getElementById("demo_material_save_btn");
const delete_btn = document.getElementById("demo_material_delete_btn");
const cancel_btn = document.getElementById("demo_material_cancel_btn");

save_btn.addEventListener("click", demo_material_save);
delete_btn.addEventListener("click", demo_material_delete);
cancel_btn.addEventListener("click", demo_material_cancel);

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


function demo_material_save(event){
    event.preventDefault();

    const device_name = document.getElementById("device_name").innerHTML;
    const device_oem = document.getElementById("device_oem").innerHTML;
    const device_serial_number = document.getElementById("device_serial_number").innerHTML;

    const device = {
        name: device_name,
        oem: device_oem,
        serial_number: device_serial_number
    }


    fetch("/device-types/" + device_type_id + "/devices/" + device_id, {
        method: "PATCH",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(device)
    })

    .then(response => {
        if (response.ok) {
            return response.json(); // Parse the response body as JSON
        } else {
            throw new Error('Request failed.'); // Throw an error for non-successful response
        }
    })
    .then(() => {
        window.location.href = "/device-types/" + device_type_id + "/devices";
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