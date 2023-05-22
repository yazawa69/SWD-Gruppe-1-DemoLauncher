<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

# laravel index
Route::get('/', function () {
    return view('welcome');
});

# Load Szenario Views
# Szenario index
Route::get(
    '/szenario_index',
    function () { return view('szenarioIndex');
});

# Szenario management
Route::get(
    '/szenario_management',
    function () { return view('szenarioManagement');
});

# Szenario Editor
Route::get(
    '/szenario_editor',
    function () { return view('szenarioEditor');
});

# Szenario Runner
Route::get(
    '\szenario_runner',
    function () { return view('szenarioRunner');
});

# load Classes from Szenario Controller
# Save Szenario
Route::get(
    '\save_szenario',
    [Controllers\ScenarioController::class, 'Save']
);

# Update Szenario
Route::get(
    '\update_szenario',
    [Controllers\ScenarioController::class, 'Update']
);

# delete Szenario
Route::get(
    '\delete_szenario',
    [Controllers\ScenarioController::class, 'Delete']
);

# fetch all Szenarios
Route::get(
    '\fetch_szenarios',
    [Controllers\ScenarioController::class, 'FetchAll']
);

# fetch Szenario
Route::get(
    '\fetch_szenario',
    [Controllers\ScenarioController::class, 'Fetch']
);

# launch Szenario
Route::get(
    '\launch_szenario',
    [Controllers\ScenarioController::class, 'Launch']
);

# stop Szenario
Route::get(
    '\stop_szenario',
    [Controllers\ScenarioController::class, 'Stop']
);

# Load Appliance Views
# Appliance Management
Route::get(
    '\appliance_management',
    function () { return view('applianceManagement');
});

# Appliance Editor
Route::get(
    '\appliance_editor',
    function () { return view('applianceEditor');
});

# Load Classes from Appliance Controller
# Save appliance
Route::get(
    '\save_appliance',
    [Controllers\ApplianceController::class, 'Save']
);

# Update appliance
Route::get(
    '\update_appliance',
    [Controllers\ApplianceController::class, 'Update']
);

# Delete appliance
Route::get(
    '\delete_appliance',
    [Controllers\ApplianceController::class, 'Delete']
);

# Fetch all appliances
Route::get(
    '\fetch_appliances',
    [Controllers\ApplianceController::class, 'FetchAll']
);

# Fetch appliance
Route::get(
    '\fetch_appliance',
    [Controllers\ApplianceController::class, 'Fetch']
);

# Load Demo Views
# Demo Editor
Route::get(
    '\demo_editor',
    function () { return view('demoEditor');
});

# Load Classes from Demo Controller
# Save Demo
Route::get(
    '\save_demo',
    [Controllers\DemoMaterialController::class, 'Save']
);

# Update Demo
Route::get(
    '\update_demo',
    [Controllers\DemoMaterialController::class, 'Update']
);

# Delete Demo
Route::get(
    '\delete_demo',
    [Controllers\DemoMaterialController::class, 'Delete']
);

# Fetch all demos
Route::get(
    '\fetch_demos',
    [Controllers\DemoMaterialController::class, 'FetchAll']
);

# Fetch demo
Route::get(
    '\fetch_demo',
    [Controllers\DemoMaterialController::class, 'Fetch']
);
