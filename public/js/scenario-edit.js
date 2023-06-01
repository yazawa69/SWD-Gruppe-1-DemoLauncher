const phase_name = document.getElementById("phase-creation-title");
const phase_create_btn = document.getElementById("create_phase_btn");
const scenario_save_btn = document.getElementById("scenario_save_btn");
const scenario_delete_btn = document.getElementById("scenario_delete_btn");

phase_create_btn.addEventListener("click", create_phase);
scenario_save_btn.addEventListener("click", save_scenario);
scenario_delete_btn.addEventListener("click", delete_scenario);

const queryString = window.location.href;
const regex = /\/(\d+)\//;
const match = queryString.match(regex);
const scenario_id = match[1];

function create_phase(event){
    event.preventDefault();

    let phase_id;

    const phase_name_value = phase_name.value;

    const phase = {
        name: phase_name_value
    }

    console.log(phase);

    fetch("/scenarios/" + scenario_id + "/phases", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(phase)
    })

    .then(response => {
        if (response.ok) {
            return response.json(); // Parse the response body as JSON
        } else {
            throw new Error('Request failed.'); // Throw an error for non-successful response
        }
    })

    // .then(data => {
    //     // Process the JSON data
    //     phase_id = data.phase.id;
    //     // Perform further actions based on the response data
    //     if (data.success) {
    //         // Show success message
    //     } else {
    //         // Show error message
    //     }
    // })
    // .then(() => {
    //     window.location.href = "/scenarios/" + scenarios_id + "/phases" + phase_id + "/edit";
    // })
    // .catch(error => {
    //     console.error('An error occurred:', error);
    // });
}

function save_scenario(event){
    event.preventDefault();

    const scenario_name = document.getElementById("scenario_name").innerHTML;
    const scenario_description = document.getElementById("scenario_description").innerHTML;

    const scenario = {
        name: scenario_name,
        description: scenario_description
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

    .then(data => {
        // Process the JSON data
        // Perform further actions based on the response data
        if (data.success) {
            // Show success message
        } else {
            // Show error message
        }
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}

function delete_scenario(event){
    event.preventDefault();

    fetch("/scenarios/" + scenario_id, {
        method: "DELETE"
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
        // Perform further actions based on the response data
        if (data.success) {
            // Show success message
        } else {
            // Show error message
        }
    })
    .then(() => {
        window.location.href = "/scenarios";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}