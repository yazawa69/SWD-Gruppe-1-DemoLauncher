

const scenario_name = document.getElementById("scenario-creation-name");
const scenario_description = document.getElementById("scenario-creation-description");
const scenario_create_btn = document.getElementById("create_scenario_btn");

scenario_create_btn.addEventListener("click", create_scenario);

function create_scenario(event){

    event.preventDefault();

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
    .then(response => response.json())
    .then(data => {
        // Process the JSON data
        console.log(data);
        console.log(data['name']);
        console.log(data['id']);
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