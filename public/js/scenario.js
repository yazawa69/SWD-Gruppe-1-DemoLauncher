

const scenario_name = document.getElementById("scenario-creation-name");
const scenario_description = document.getElementById("scenario-creation-description");
const scenario_create_btn = document.getElementById("create_scenario_btn");

scenario_create_btn.addEventListener("click", create_scenario);

function create_scenario(event){

    event.preventDefault();

    let scenario_id;

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
        scenario_id = data.scenario.id;
        // Perform further actions based on the response data
        if (data.success) {
            // Show success message
        } else {
            // Show error message
        }
    })
    .then(() => {
        window.location.href = "/scenarios/" + scenario_id + "/edit";
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });

}