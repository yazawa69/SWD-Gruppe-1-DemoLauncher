const phase_save_btn = document.getElementById("phase_save_btn");
const phase_delete_btn = document.getElementById("phase_delete_btn");
const phase_cancel_btn = document.getElementById("phase_cancel_btn");

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

function phase_save(event){
    event.preventDefault();

    fetch("/scenarios/" + scenario_id, {
        method: "PATCH",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(scenario)
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