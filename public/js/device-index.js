// Get buttons
const device_edit_btn = document.getElementById("device_edit_btn");
const device_add_btn = document.getElementById("device_add_btn");

// Add event listeners
device_edit_btn.addEventListener("click", edit_device);
device_add_btn.addEventListener("click", add_device);

// Device id for global access when editing device
let device_id;

// Get device type id from url
let device_type_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "device-types") {
        device_type_id = pathArray[i+1];
    }
}

// Called when selecting device from list, enable edit button
function set_device_id(id) {
    device_id = id;
    device_edit_btn.disabled = false;
}

// Called when deselecting a device, sets device_id to null
function unset_device_id() {
    device_id = null;
    device_edit_btn.disabled = true;
}

// Redirect to edit device page with selected device id
function edit_device(event){
    event.preventDefault();

    if (device_id != null) {
        window.location.href = "/device-types/" + device_type_id + "/devices/" + device_id + "/edit";
    }
}

// Redirect to add device page
function add_device(event){
    event.preventDefault();

    if (device_type_id != null) {
        window.location.href = "/device-types/" + device_type_id + "/devices/new";
    }

}

