const phase_name = document.getElementById("phase_creation_title");
const phase_create_btn = document.getElementById("create_phase_btn");
const scenario_save_btn = document.getElementById("scenario_save_btn");
const scenario_delete_btn = document.getElementById("scenario_delete_btn");

const scenario_name = document.getElementById("scenario_name");
const scenario_description = document.getElementById("scenario_description");

const scenario_name_val = scenario_name.value;
const scenario_description_val = scenario_description.value;

scenario_name.oninput = function () {
    activate_button();
};

scenario_description.oninput = function () {
    activate_button();
};

function activate_button(){
    if (scenario_name.value != "" && scenario_description.value != "") {    
        if (scenario_name.value != scenario_name_val || scenario_description.value != scenario_description_val) {
            scenario_save_btn.disabled = false;
        }
        else {
            scenario_save_btn.disabled = true;
        }
    }
};

phase_create_btn.addEventListener("click", phase_edit);
scenario_save_btn.addEventListener("click", scenario_save);
scenario_delete_btn.addEventListener("click", scenario_delete);

let scenario_id;
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "scenarios") {
        scenario_id = pathArray[i+1];
    }
}

function phase_edit(event){
    event.preventDefault();

    const phase_name_value = phase_name.value;

    const phase = {
        name: phase_name_value
    }

    fetch("/scenarios/" + scenario_id + "/phases", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(phase)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Request failed.'); // Throw an error for non-successful response
        }
    })
    .then(() => {
        window.location.href = "/scenarios/" + scenario_id + "/edit";
    })
}

function scenario_save(event){
    event.preventDefault();

    const scenario_name_value = scenario_name.value;
    const scenario_description_value = scenario_description.value;

    const scenario = {
        name: scenario_name_value,
        description: scenario_description_value
    }

    fetch("/scenarios/" + scenario_id, {
        method: "PATCH",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(scenario)
    })

    .then(response => {
        if (response.ok) {
            return response.json(); // Parse the response body as JSON
        } else {
            throw new Error('Request failed.'); // Throw an error for non-successful response
        }
    })

    .then(() => {
        window.location.href = "/scenarios";
    })

    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function scenario_delete(event){
    event.preventDefault();

    fetch("/scenarios/" + scenario_id, {
        method: "DELETE"
    })
    .then(() => {
        window.location.href = "/scenarios";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}