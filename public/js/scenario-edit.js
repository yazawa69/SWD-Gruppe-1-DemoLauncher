// Get input fields
const phase_name = document.getElementById("phase_creation_title");
const scenario_name = document.getElementById("scenario_name");
const scenario_description = document.getElementById("scenario_description");

// Get input values
const scenario_name_val = scenario_name.value;
const scenario_description_val = scenario_description.value;

// Get buttons
const phase_create_btn = document.getElementById("create_phase_btn");
const scenario_save_btn = document.getElementById("scenario_save_btn");
const scenario_delete_btn = document.getElementById("scenario_delete_btn");

// Scenario id for global access
let scenario_id;

// Get scenario id from url
const queryString = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "scenarios") {
        scenario_id = pathArray[i+1];
    }
}

// Add event listeners
phase_create_btn.addEventListener("click", phase_edit);
scenario_save_btn.addEventListener("click", scenario_save);
scenario_delete_btn.addEventListener("click", scenario_delete);

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
        if (scenario_name.value != scenario_name_val || scenario_description.value != scenario_description_val) {
            scenario_save_btn.disabled = false;
        }
        else {
            scenario_save_btn.disabled = true;
        }
    }
};

// Activate create phase button if input field is filled
phase_name.oninput = function () {
    if (phase_name.value != "") {
        phase_create_btn.disabled = false;
    }
    else {
        phase_create_btn.disabled = true;
    }
};

// Edit phase in database and redirect to scenario edit page
function phase_edit(event){
    event.preventDefault();

    // Get phase name
    const phase_name_value = phase_name.value;

    // Create phase object from input value
    const phase = {
        name: phase_name_value
    }

    // Send phase object to server
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

// Save scenario in database and redirect to scenario index page
function scenario_save(event){
    event.preventDefault();

    // Get input values
    const scenario_name_value = scenario_name.value;
    const scenario_description_value = scenario_description.value;

    // Create scenario object from input values
    const scenario = {
        name: scenario_name_value,
        description: scenario_description_value
    }

    // Send scenario object to server
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

// Delete scenario in database and redirect to scenario index page
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