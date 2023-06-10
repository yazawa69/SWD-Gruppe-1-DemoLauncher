const device_edit_btn = document.getElementById("device_edit_btn");
const device_add_btn = document.getElementById("device_add_btn");

let device_id;

device_edit_btn.addEventListener("click", edit_device);
device_add_btn.addEventListener("click", add_device);

let device_type_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "device-types") {
        device_type_id = pathArray[i+1];
    }
}


function set_device_id(id) {
    device_id = id;
    device_edit_btn.disabled = false;
}

function edit_device(event){
    event.preventDefault();

    if (device_id != null) {
        window.location.href = "/device-types/" + device_type_id + "/devices/" + device_id + "/edit";
    }
}

function add_device(event){
    event.preventDefault();

    if (device_type_id != null) {
        window.location.href = "/device-types/" + device_type_id + "/devices/new";
    }

}

