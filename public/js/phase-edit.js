const phase_save_btn = document.getElementById("phase_save_btn");
const phase_delete_btn = document.getElementById("phase_delete_btn");
const phase_cancel_btn = document.getElementById("phase_cancel_btn");
const phase_name = document.getElementById("phase_name");

const phase_name_val = phase_name.value;

phase_save_btn.addEventListener("click", phase_save);
phase_delete_btn.addEventListener("click", phase_delete);
phase_cancel_btn.addEventListener("click", phase_cancel);

let scenario_id;
let phase_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "scenarios") {
        scenario_id = pathArray[i+1];
    }
    if (pathArray[i] == "phases") {
        phase_id = pathArray[i+1];
    }
}

phase_name.oninput = function () {
    if (phase_name.value != "" && phase_name.value != phase_name_val) {
        phase_save_btn.disabled = false;
    }
    else {
        phase_save_btn.disabled = true;
    }
};

function phase_save(event){
    event.preventDefault();

    const phase_name_value = phase_name.value;

    const phase = {
        name: phase_name_value
    }
    event.preventDefault();

    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id, {
        method: "PATCH",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(phase)
    })
    .then(() => {
        window.location.href = "/scenarios/" + scenario_id + "/edit";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function phase_delete(event){
    event.preventDefault();

    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id, {
        method: "DELETE"
    })
    .then(() => {
        window.location.href = "/scenarios/" + scenario_id + "/edit";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function phase_cancel(event){
    event.preventDefault();

    window.location.href = "/scenarios/" + scenario_id + "/edit";
}

function set_phase_device_id(id) {
    phase_device_id = id;
}

function add_phase_device(device_id){
    
    const phase_device = {
        phase_id: phase_id,
        device_id: device_id
    }
    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id + "/phasedevices", {
        
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(phase_device)
    })
    .then(() => {
        location.reload();
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });

}

function phase_cancel(event){
    event.preventDefault();

    window.location.href = "/scenarios/" + scenario_id + "/edit";
}

function add_demo_material(demo_material_id){
    
    const phase_device = {
        demo_material_id: demo_material_id
    }

    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id + "/phasedevices/" + phase_device_id + "/demomaterials", {
        
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(phase_device)
    })
    .then(() => {
        location.reload();
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });

}

function phase_device_remove(phase_device_id){
    console.log(phase_device_id);

    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id + "/phasedevices/" + phase_device_id, {
        method: "DELETE"
    })
    .then(() => {
        location.reload();
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function demo_material_remove(demo_material_data){
    phase_device_id = demo_material_data['phase_device_id'];
    demo_material_id = demo_material_data['demo_material_id'];


    fetch("/scenarios/" + scenario_id + "/phases/" + phase_id + "/phasedevices/" + phase_device_id + "/demomaterials/" + demo_material_id, {
        method: "DELETE"
    })
    .then(() => {
        location.reload();
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}