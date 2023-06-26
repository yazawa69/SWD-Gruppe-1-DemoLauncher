// Get scenario_id and phase_id from url
let scenario_id;
let phase_id;
let url = window.location.href;
const pathArray = window.location.pathname.split('/');
for (i=0; i < pathArray.length; i++) {
    if (pathArray[i] == "scenarios") {
        scenario_id = pathArray[i+1];
    }
    if (pathArray[i] == "phases") {
        phase_id = pathArray[i+1];
    }
}


// Get demo material controls
const demo_material_controls = document.getElementById("demo_material_controls");
const carousel_prev_btn = document.getElementById("carousel_prev_btn");
const carousel_next_btn = document.getElementById("carousel_next_btn");
const menu = document.getElementById("menu");
menu.hidden = true;

// add end scenario listener
const end_scenario_btn = document.getElementById("end_scenario_button");
end_scenario_btn.addEventListener("click", end_scenario);

// Button id for global access
let btn_phase_id;
let btn_demo_material_id;

// Device button id for global access
let device_button_id;

// Demo material playing state for global access
let playing;

// Set unique button id for each demo material
function set_button_id(phase_id, demo_material_id){
    btn_phase_id = phase_id;
    btn_demo_material_id = demo_material_id;
}

// demo material selection stuff
let selected_demo_material_id;

function end_scenario(){
    fetch("http://192.168.188.31:5000/close-live-stream", {
        method: "GET"
    })
    .then((response) => {
        if (!response.ok){
            console.log("Could not end scenario.")
        }
        else{
            console.log("Successfully ended scenario.")
        }
    })
    .catch(error => {
        console.error('An error occurred:', error);
    });
}



function material_button_click(phase_device_and_material_data){
    selected_phase_device_id = phase_device_and_material_data['phase_device_id']; 
    live_stream_device_id = phase_device_and_material_data['live_stream_device_id'];
    selected_demo_material_id = phase_device_and_material_data['demo_material_id'];
    
    set_demo_material_name(phase_device_and_material_data['demo_material_name']);

    if (live_stream_device_id != null) {
        console.log("/scenarios/" + scenario_id + "/run/phases/" + phase_id + "/phasedevices/" + selected_phase_device_id + "/initiate-live-stream");
        fetch("/scenarios/" + scenario_id + "/run/phases/" + phase_id + "/phasedevices/" + selected_phase_device_id + "/initiate-live-stream", {
            method: "GET",
            headers: {
                'live_stream_device_id': live_stream_device_id
            }
        })
        .then((response) => {
            if (!response.ok){
                console.log("Could not load the material.")
            }
            else{
                console.log("Successfully loaded material.")
            }
        })
        .catch(error => {
            console.error('An error occurred:', error);
        });
    }
    
}

// Called when selecting new demo material, set demo material name in phase overview
function set_demo_material_name(name){
    // Get demo material name
    const demo_material_name = name;
    // Set demo material name in corresponding button
    const button = document.getElementById("demo_material_" + btn_phase_id + "_" + btn_demo_material_id);
    button.innerHTML = demo_material_name;
};

// Show or hide demo material controls
function toggle_demo_material_controls(phase, id) {
  // Check if device button pressed is not the same as the previous one and if the demo material is not playing
  if (device_button_id != null && device_button_id != id && !playing) {
    // Hide demo material controls
    demo_material_controls.hidden = false;
    // Set color of previously pressed button to default
    const old_device_btn = document.getElementById("device_btn_" + phase + "_" + device_button_id);
    old_device_btn.style.setProperty("background-color", "#2b3035", "important");
    // Set color of newly pressed button to green
    const new_device_btn = document.getElementById("device_btn_" + phase + "_" + id);
    new_device_btn.style.setProperty("background-color", "#03b670", "important");
    // Set device button id to id of pressed button
    device_button_id = id;
  }
  //Else if device button pressed is the same as the previous one
  else {
    // Get device button
    const device_btn = document.getElementById("device_btn_" + phase + "_" + id);
    // Check if demo material controls are hidden
    if (demo_material_controls.hidden == true) {
      // Unhide demo material controls
      demo_material_controls.hidden = false;
      // Set device button background color to green
      device_btn.style.setProperty("background-color", "#03b670", "important");
      // Set device button id to id of pressed button
      device_button_id = id;
    }
    // Else if demo material controls are not hidden
    else if (!playing) {
      // Unhide demo material controls
      demo_material_controls.hidden = true;
      // Set device button background color to default
      device_btn.style.setProperty("background-color", "#2b3035", "important");
    }
  } 
};

// Show/Hide the Play and Pause Button in the run.blade.php
var buttonClicked = false;
function toggleImage() {
  var imgplay = document.getElementById('playButton');
  var imgpause = document.getElementById('pauseButton');
  if (buttonClicked) {
    imgpause.classList.add('pause');
    imgpause.classList.remove('play');
    imgplay.classList.add('play');
    imgplay.classList.remove('pause');
    // Set playing state to false
    playing = false;
    enable_carousel_controls();
  } else {
    imgplay.classList.add('pause');
    imgplay.classList.remove('play');
    imgpause.classList.add('play');
    imgpause.classList.remove('pause');
    // Set playing state to true
    playing = true;
    disable_carousel_controls();
  }
  buttonClicked = !buttonClicked;
}

// Disable carousel controls when demo material is playing
function disable_carousel_controls() {
  carousel_prev_btn.hidden = true;
  carousel_next_btn.hidden = true;
}

// Enable carousel controls when demo material is not playing
function enable_carousel_controls() {
  carousel_prev_btn.hidden = false;
  carousel_next_btn.hidden = false;
}