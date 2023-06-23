// Get input fields
const device_name = document.getElementById("device_name");
const device_oem = document.getElementById("device_oem");
const device_serial_number = document.getElementById("device_serial_number");
const device_ip_address = document.getElementById("device_ip_address");

// Get input values
const device_name_val = device_name.value;
const device_oem_val = device_oem.value;
const device_serial_number_val = device_serial_number.value;

// Get buttons
const save_btn = document.getElementById("device_save_btn");
const delete_btn = document.getElementById("device_delete_btn");
const cancel_btn = document.getElementById("device_cancel_btn");

// Add event listeners
save_btn.addEventListener("click", device_save);
delete_btn.addEventListener("click", device_delete);
cancel_btn.addEventListener("click", device_cancel);

// Get device_type_id and device_id from url
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

// Called when inputting device name
device_name.oninput = function () {
    activate_button();
};

// Called when inputting device oem
device_oem.oninput = function () {
    activate_button();
};

// Called when inputting device serial number
device_serial_number.oninput = function () {
    activate_button();
};

// Activate save device button if all input fields are filled
function activate_button(){
    if (device_name.value != "" && device_oem.value != "" && device_serial_number.value != "") { 
        if (device_name_val != device_name.value || device_oem_val != device_oem.value || device_serial_number_val != device_serial_number.value) {
            device_save_btn.disabled = false;
        } 
        else {
            device_save_btn.disabled = true;
        }
    }
    
};

// Save device to database and redirect to device list
function device_save(event){
    event.preventDefault();

    // Get input values
    const device_name_value = device_name.value;
    const device_oem_value = device_oem.value;
    const device_serial_number_value = device_serial_number.value;
    const device_ip_address_value = device_ip_address.value;

    // Create device object
    const device = {
        name: device_name_value,
        oem: device_oem_value,
        serial_number: device_serial_number_value,
        ip_address: device_ip_address_value,
    }

    // Send device object to server
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

// Delete device from database and redirect to device list
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

// Redirect to device list
function device_cancel(event){
    event.preventDefault();

    window.location.href = "/device-types/" + device_type_id + "/devices";
}