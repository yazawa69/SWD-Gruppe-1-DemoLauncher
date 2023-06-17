// Get input fields
const scenario_name = document.getElementById("scenario-creation-name");
const scenario_description = document.getElementById("scenario-creation-description");

// Get buttons
const scenario_create_btn = document.getElementById("create_scenario_btn");
const scenario_edit_btn = document.getElementById("scenario_edit_btn");
const scenario_start_btn = document.getElementById("scenario_start_btn");

// Scenario id for global access when running scenario
let scenario_id;

// Add event listeners
scenario_create_btn.addEventListener("click", create_scenario);
scenario_edit_btn.addEventListener("click", edit_scenario);
scenario_start_btn.addEventListener("click", start_scenario);

// Called when inputting scenario name
scenario_name.oninput = function () {
    activate_button();
};

// Called when inputting scenario description
scenario_description.oninput = function () {
    activate_button();
};

// Activate create scenario button if both input fields are filled
function activate_button(){
    if (scenario_name.value != "" && scenario_description.value != "") {    
        create_scenario_btn.disabled = false;
    }
    else {
        create_scenario.disabled = true;
    }
};

// Create scenario in database and redirect to scenario edit page
function create_scenario(event){

    event.preventDefault();

    let id;

    // Get input values
    const scenario_name_value = scenario_name.value;
    const scenario_description_value = scenario_description.value;

    // Create scenario object from input values
    const scenario = {
        name: scenario_name_value,
        description: scenario_description_value
    }

    // Send scenario object to server
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
        // Set id to newly created scenario id
        id = data.scenario.id;
    })
    .then(() => {
        window.location.href = "/scenarios/" + id + "/edit";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });

}

// Called when selecting a scenario, sets scenario_id to id of selected scenario
function set_scenario_id(id) {
    scenario_id = id;
    scenario_edit_btn.disabled = false;
    scenario_start_btn.disabled = false;
}

// Redirect to scenario edit page of selected scenario
function edit_scenario(event) {
    event.preventDefault();

    if (scenario_id != null) {
        window.location.href = "/scenarios/" + scenario_id + "/edit";
    }
}

// Start selected scenario and redirect to running scenario page
function start_scenario(event) {
    event.preventDefault();

    if (scenario_id != null) {
        window.location.href = "/scenarios/" + scenario_id + "/run/phases/" + 1;
    }
}