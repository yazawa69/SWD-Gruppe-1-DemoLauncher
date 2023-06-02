const phase_name = document.getElementById("phase_creation_title");
const phase_create_btn = document.getElementById("create_phase_btn");
const scenario_save_btn = document.getElementById("scenario_save_btn");
const scenario_delete_btn = document.getElementById("scenario_delete_btn");

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