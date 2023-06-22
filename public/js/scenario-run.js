// Get demo material controls
const demo_material_controls = document.getElementById("demo_material_controls");

// Button id for global access
let button_id;

// Set unique button id for each demo material
function set_button_id(id){
    button_id = id;
}

// Called when selecting new demo material, set demo material name in phase overview
function set_demo_material_name(demo_material_data){
    // Get demo material name
    const demo_material_name = demo_material_data['demo_material_name'];
    // Set demo material name in corresponding button
    const button = document.getElementById("button_" + button_id);
    button.innerHTML = demo_material_name;
};

// Show or hide demo material controls
function toggle_demo_material_controls() {
    if (demo_material_controls.hidden == true) {
        demo_material_controls.hidden = false;
    }
    else {
        demo_material_controls.hidden = true;
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
  } else {
    imgplay.classList.add('pause');
    imgplay.classList.remove('play');
    imgpause.classList.add('play');
    imgpause.classList.remove('pause');
  }

  buttonClicked = !buttonClicked;
}
