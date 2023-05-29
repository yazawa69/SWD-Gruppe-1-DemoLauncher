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

Route::post('/phasedevices', [Test::class, 'createPhaseDevice']);

// scenarios
// fetch scenario overview view
Route::get('/scenarios', [ScenarioController::class, 'index']);

// fetch scenario creation view
Route::get('/scenarios/new', [ScenarioController::class, 'new']);

// add new scenario
Route::post('/scenarios', [ScenarioController::class, 'create']);

// fetch specific scenario
Route::get('/scenarios/{scenario_id}', [ScenarioController::class, 'show']);

// fetch scenario edit view
Route::get('/scenarios/{scenario_id}/edit', [ScenarioController::class, 'edit']);

// update scenario
Route::patch('/scenarios/{scenario_id}', [ScenarioController::class, 'update']);

// delete scenario
Route::delete('/scenarios/{scenario_id}', [ScenarioController::class, 'destroy']);

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
Route::get('/devicetypes/{device_type_id}/devices', [DeviceController::class, 'index']);

// fetch device creation view
Route::get('/devicetypes/{device_type_id}/devices/new', [DeviceController::class, 'new']);

// add new device
Route::post('/devicetypes/{device_type_id}/devices', [DeviceController::class, 'create']);

// fetch specific device
Route::get('/devicetypes/{device_type_id}/devices/{device_id}', [DeviceController::class, 'show']);

// fetch device edit view
Route::get('/devicetypes/{device_type_id}/devices/{device_id}/edit', [DeviceController::class, 'edit']);

// TODO: update device
Route::patch('/devicetypes/{device_type_id}/devices/{device_id}', [DeviceController::class, 'update']);

// TODO: delete device
Route::delete('/devicetypes/{device_type_id}/devices/{device_id}', [DeviceController::class, 'destroy']);

// device types
// fetch device type overview view
Route::get('/devicetypes', [DeviceTypeController::class, 'index']);

// add new device type
Route::post('/devicetypes', [DeviceTypeController::class, 'create']);

// delete device type
Route::delete('/devicetypes/{device_type_id}', [DeviceTypeController::class, 'destroy']);

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

// demo material type

Route::post('/demomaterialtypes', [Test::class, 'createDemoMaterialType']);

// forests and trees

Route::post('/forests', function(){
    $forest = \App\Models\Forest::create();
    return response(200);
});

Route::post('/trees', function(Illuminate\Http\Request $req){
    $data = $req->all();
    $tree = new \App\Models\Tree();
    $forest= \App\Models\Forest::find($data['forest_id']);
    // $tree->forest()->associate($forest);
    $tree->forest_id = $data['forest_id'];
    
    try{
        $tree->save();
    }
    catch(QueryException $e){
        return response('Something went wrong', 500);
    }
    return response(200);
});

Route::get('/trees/forest', function(Illuminate\Http\Request $req){
    $data = $req->all();
    $tree = \App\Models\Tree::find($data['tree_id']);
    $forest = $tree->forest;
    return response()->json($forest);
});

Route::post('/tree-leaf', function(Illuminate\Http\Request $req){
    $data = $req->all();
    $leaf = new \App\Models\TreeLeaf();
    $leaf->tree_id = $data['tree_id'];
    $leaf->save();
    return response(200);
});

Route::get('/trees/leaves', function(Illuminate\Http\Request $req){
    $data = $req->all();
    $tree = \App\Models\Tree::find($data['tree_id']);
    $leaves = $tree->{\App\Models\Tree::ATTRIBUTE_TREE_LEAVES};
    return response()->json([$leaves]);
});


Route::get('forests/trees', function(Illuminate\Http\Request $req){
    $data = $req->all();
    $forest = \App\Models\Forest::find($data['forest_id']);
    $trees = $forest->trees;
    return response()->json($trees);
});
