const scenario_name = document.getElementById("scenario-creation-name");
const scenario_description = document.getElementById("scenario-creation-description");
const scenario_create_btn = document.getElementById("create_scenario_btn");
const scenario_edit_btn = document.getElementById("scenario_edit_btn");
const scenario_start_btn = document.getElementById("scenario_start_btn");

let scenario_id;

scenario_create_btn.addEventListener("click", create_scenario);
scenario_edit_btn.addEventListener("click", edit_scenario);
scenario_start_btn.addEventListener("click", start_scenario);

scenario_name.oninput = function () {
    activate_button();
};

scenario_description.oninput = function () {
    activate_button();
};

function activate_button(){
    if (scenario_name.value != "" && scenario_description.value != "") {    
        create_scenario_btn.disabled = false;
    }
    else {
        create_scenario.disabled = true;
    }
};

function create_scenario(event){

    event.preventDefault();

    let id;

    const scenario_name_value = scenario_name.value;
    const scenario_description_value = scenario_description.value;

    const scenario = {
        name: scenario_name_value,
        description: scenario_description_value
    }

    fetch("/scenarios", {
        method: "POST",
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
    .then(data => {
        // Process the JSON data
        id = data.scenario.id;
        // Perform further actions based on the response data
        if (data.success) {
            // Show success message
        } else {
            // Show error message
        }
    })
    .then(() => {
        window.location.href = "/scenarios/" + id + "/edit";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });

}

function set_scenario_id(id) {
    scenario_id = id;
}

function edit_scenario(event) {
    event.preventDefault();

    if (scenario_id != null) {
        window.location.href = "/scenarios/" + scenario_id + "/edit";
    }
}

function start_scenario(event) {
    event.preventDefault();

    if (scenario_id != null) {
        window.location.href = "/scenarios/" + scenario_id + "/run/phases/" + 1;
    }
}