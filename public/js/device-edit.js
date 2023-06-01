const save_btn = document.getElementById("device_save_btn");
const delete_btn = document.getElementById("device_delete_btn");
const cancel_btn = document.getElementById("device_cancel_btn");

save_btn.addEventListener("click", device_save);
delete_btn.addEventListener("click", device_delete);
cancel_btn.addEventListener("click", device_cancel);

const queryString = window.location.href;
const regex_device_type = /\/(\d+)\//;
const match_device_type = queryString.match(regex_device_type);
const device_type_id = match_device_type[1];
const regex_device = /\/(\d+)\/edit$/;
const match_device = queryString.match(regex_device);
const device_id = match_device[1];

function device_save(event){
    event.preventDefault();

    const device_name = document.getElementById("device_name").innerHTML;
    const device_oem = document.getElementById("device_oem").innerHTML;
    const device_serial_number = document.getElementById("device_serial_number").innerHTML;

    const device = {
        name: device_name,
        oed: device_oem,
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