const device_edit_btn = document.getElementById("device_edit_btn");
const device_add_btn = document.getElementById("device_add_btn");

let device_id;

device_edit_btn.addEventListener("click", edit_device);
device_add_btn.addEventListener("click", add_device);

const queryString = window.location.href;
const regex = /\/(\d+)\//;
const match = queryString.match(regex);
const device_type_id = match[1];

function set_device_id(id) {
    device_id = id;
}

function edit_device(event){
    event.preventDefault();

    if (device_id != null) {
        window.location.href = "/device-types/" + device_type_id + "/devices/" + device_id + "/edit";
    }
}

function add_device(event){

}

