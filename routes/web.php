<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test;
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
// scenario overview page
Route::get('/scenarios', [Test::class, 'getAllScenarios']);

// add new scenario
Route::post('/scenarios', [Test::class, 'createScenario']);

// fetch specific scenario
Route::get('/scenarios/{scenario_id}', [Test::class, 'getScenario']);

// update scenario
Route::patch('/scenarios/{scenario_id}', [Test::class, 'updateScenario']);

// delete scenario
Route::delete('/scenarios/{scenario_id}', [Test::class, 'deleteScenario']);

// phases
// TODO: phase overview
Route::get('/scenarios/{scenario_id}/phases', [Test::class, 'getAllPhases']);

// add new phase
Route::post('/scenarios/{scenario_id}/phases', [Test::class, 'createPhase']);

// fetch specific phase
Route::get('/scenarios/{scenario_id}/phases/{phase_id}', [Test::class, 'getPhase']);

// update phase
Route::patch('/scenarios/{scenario_id}/phases/{phase_id}', [Test::class, 'updatePhase']);

// delete phase
Route::delete('/scenarios/{scenario_id}/phases/{phase_id}', [Test::class, 'deletePhase']);

// add device to phase
Route::post('/scenarios/{scenario_id}/phases/{phase_id}', [Test::class, 'addDeviceToPhase']);

// remove device from phase
Route::delete('/scenarios/{scenario_id}/phases/{phase_id}/{device_id}', [Test::class, 'removeDeviceFromPhase']);

// devices
// device overview
Route::get('/devices', [Test::class, 'getAllDevices']);

// fetch specific device
Route::get('/devices/{device_id}', [Test::class, 'getDevice']);

// add new device
Route::post('/devices', [Test::class, 'createDevice']);

// TODO: update device
Route::patch('/devices/{device_id}', [Test::class, 'updateDevice']);

// TODO: delete device
Route::delete('/devices/{device_id}', [Test::class, 'deleteDevice']);
