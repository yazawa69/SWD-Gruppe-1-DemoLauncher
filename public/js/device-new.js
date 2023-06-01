const device_save_btn = document.getElementById("device_save_btn");
const device_delete_btn = document.getElementById("device_delete_btn");
const device_cancel_btn = document.getElementById("device_cancel_btn");

device_save_btn.addEventListener("click", device_save);
device_delete_btn.addEventListener("click", device_cancel);
device_cancel_btn.addEventListener("click", device_cancel);

let device_type_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "device-types") {
        device_type_id = pathArray[i + 1];
    }
}


function device_save (event){
    event.preventDefault();

    const device_name = document.getElementById("device_name").value;
    const device_oem = document.getElementById("device_oem").value;
    const device_serial_number = document.getElementById("device_serial_number").value;

    const device = {
        name: device_name,
        oem: device_oem,
        serial_number: device_serial_number
    }

    console.log("device: " + JSON.stringify(device));

    fetch("/device-types/" + device_type_id + "/devices", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(device)
    })
    .then(() => {
        window.location.href = "/device-types/" + device_type_id + "/devices";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function device_cancel (event){
    event.preventDefault();

    window.location.href = "/device-types/" + device_type_id + "/devices";
}