const save_btn = document.getElementById("device_save_btn");
const delete_btn = document.getElementById("device_delete_btn");
const cancel_btn = document.getElementById("device_cancel_btn");

save_btn.addEventListener("click", device_save);
delete_btn.addEventListener("click", device_delete);
cancel_btn.addEventListener("click", device_cancel);

    let device_type_id;
    let device_id;
    const queryString = window.location.href;
    const pathArray = window.location.pathname.split('/');
    for (i=0; i < pathArray.length; i++) {
        if (pathArray[i] == "device-types") {
            device_type_id = pathArray[i + 1];
        }
        if (pathArray[i] == "devices") {
            device_id = pathArray[i + 1];
        }
    }

function device_save(event){
    event.preventDefault();

    const device_name = document.getElementById("device_name").value;
    const device_oem = document.getElementById("device_oem").value;
    const device_serial_number = document.getElementById("device_serial_number").value;

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

function device_delete(event){
    event.preventDefault();

    fetch("/device-types/" + device_type_id + "/devices/" + device_id, {
        method: "DELETE"
    })
    .then(() => {
        window.location.href = "/device-types/" + device_type_id + "/devices";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function device_cancel(event){
    event.preventDefault();

    window.location.href = "/device-types/" + device_type_id + "/devices";
}