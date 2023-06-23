// Get demo material controls
const demo_material_controls = document.getElementById("demo_material_controls");
const carousel_prev_btn = document.getElementById("carousel_prev_btn");
const carousel_next_btn = document.getElementById("carousel_next_btn");
const menu = document.getElementById("menu");
menu.hidden = true;

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

// Called when selecting new demo material, set demo material name in phase overview
function set_demo_material_name(demo_material_data){
    // Get demo material name
    const demo_material_name = demo_material_data['demo_material_name'];
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
    enable_carousel_controls()
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
      disable_carousel_controls()
      // Set device button background color to green
      device_btn.style.setProperty("background-color", "#03b670", "important");
      // Set device button id to id of pressed button
      device_button_id = id;
    }
    // Else if demo material controls are not hidden
    else if (!playing) {
      // Hide demo material controls
      demo_material_controls.hidden = true;
      enable_carousel_controls()
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