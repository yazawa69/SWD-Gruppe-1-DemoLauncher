<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{Test, ScenarioController, PhaseController, DeviceController, PhaseDeviceController, DeviceTypeController, DemoMaterialController, DemoMaterialTypeController};
use Illuminate\Database\QueryException;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return response(200);   
});

Route::post('/phase-devices', [Test::class, 'createPhaseDevice']);

// scenarios
// fetch scenario overview view
Route::get('/scenarios', [ScenarioController::class, 'index']);

// fetch scenario creation view
Route::get('/scenarios/new', [ScenarioController::class, 'new']);

// add new scenario
Route::post('/scenarios', [ScenarioController::class, 'create']);

// fetch scenario edit view
Route::get('/scenarios/{scenario_id}/edit', [ScenarioController::class, 'edit']);

// update scenario
Route::patch('/scenarios/{scenario_id}', [ScenarioController::class, 'update']);

// delete scenario
Route::delete('/scenarios/{scenario_id}', [ScenarioController::class, 'destroy']);

// run scenario
Route::get('/scenarios/{scenario_id}/run/phase/{phase_id}', [ScenarioController::class, 'run']);

// phases
// fetch phase creation view
Route::get('/scenarios/{scenario_id}/phases/new', [PhaseController::class, 'new']);

// add new phase
Route::post('/scenarios/{scenario_id}/phases', [PhaseController::class, 'create']);

// fetch specific phase
Route::get('/scenarios/{scenario_id}/phases/{phase_id}', [PhaseController::class, 'show']);

// fetch the phase edit view
Route::get('/scenarios/{scenario_id}/phases/{phase_id}/edit', [PhaseController::class, 'edit']);

// update phase
Route::patch('/scenarios/{scenario_id}/phases/{phase_id}', [PhaseController::class, 'update']);

// delete phase
Route::delete('/scenarios/{scenario_id}/phases/{phase_id}', [PhaseController::class, 'destroy']);

// phase devices
// fetch phase device creation view
Route::get('/scenarios/{scenario_id}/phases/{phase_id}/phasedevices/new', [PhaseDeviceController::class, 'new']);

// add new phase device
Route::post('/scenarios/{scenario_id}/phases/{phase_id}/phasedevices', [PhaseDeviceController::class, 'create']);

// fetch specific phase device
Route::get('/scenarios/{scenario_id}/phases/{phase_id}/phasedevices/{phase_device_id}', [PhaseDeviceController::class, 'show']);

// delete phase device
Route::delete('/scenarios/{scenario_id}/phases/{phase_id}/phasedevices/{phase_device_id}', [PhaseDeviceController::class, 'destroy']);

// add demo material to phase device
Route::post('/scenarios/{scenario_id}/phases/{phase_id}/phasedevices/{phase_device_id}/demomaterials', [PhaseDeviceController::class, 'addDemoMaterial']);

// remove demo material from phase device
Route::delete('/scenarios/{scenario_id}/phases/{phase_id}/phasedevices/{phase_device_id}/demomaterials/{demo_material_id}', [PhaseDeviceController::class, 'removeDemoMaterial']);

// devices
// device overview
Route::get('/device-types/{device_type_id}/devices', [DeviceController::class, 'index']);

// fetch device creation view
Route::get('/device-types/{device_type_id}/devices/new', [DeviceController::class, 'new']);

// add new device
Route::post('/device-types/{device_type_id}/devices', [DeviceController::class, 'create']);

// fetch specific device
Route::get('/device-types/{device_type_id}/devices/{device_id}', [DeviceController::class, 'show']);

// fetch device edit view
Route::get('/device-types/{device_type_id}/devices/{device_id}/edit', [DeviceController::class, 'edit']);

// TODO: update device
Route::patch('/device-types/{device_type_id}/devices/{device_id}', [DeviceController::class, 'update']);

// TODO: delete device
Route::delete('/device-types/{device_type_id}/devices/{device_id}', [DeviceController::class, 'destroy']);

// device types
// fetch device type overview view
Route::get('/device-types', [DeviceTypeController::class, 'index']);

// add new device type
Route::post('/device-types', [DeviceTypeController::class, 'create']);

// delete device type
Route::delete('/device-types/{device_type_id}', [DeviceTypeController::class, 'destroy']);

// demo material
// fetch demo material overview view
Route::get('/demo-material-types/{demo_material_type_id}/demo-materials', [DemoMaterialController::class, 'index']);

// fetch demo material creation view
Route::get('/demo-material-types/{demo_material_type_id}/demo-materials/new', [DemoMaterialController::class, 'new']);

// add new demo material
Route::post('/demo-material-types/{demo_material_type_id}/demo-materials', [DemoMaterialController::class, 'create']);

// fetch specific demo material
Route::get('/demo-material-types/{demo_material_type_id}/demo-materials/{demo_material_id}', [DemoMaterialController::class, 'show']);

// fetch demo material edit view
Route::get('/demo-material-types/{demo_material_type_id}/demo-materials/{demo_material_id}/edit', [DemoMaterialController::class, 'edit']);

// update demo material
Route::patch('/demo-material-types/{demo_material_type_id}/demo-materials/{demo_material_id}', [DemoMaterialController::class, 'update']);

// delete demo material
Route::delete('/demo-material-types/{demo_material_type_id}/demo-materials/{demo_material_id}', [DemoMaterialController::class, 'destroy']);

// demo material types
Route::get('/demo-material-types', [DemoMaterialTypeController::class, 'index']);

// demo material type

Route::post('/demo-material-types', [Test::class, 'createDemoMaterialType']);


// get som
Route::get('/das', function(){
    $scenario = \App\Models\Scenario::find(2);

    $phases = $scenario->phases;

    return response()->json($phases);
});


