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

Route::post('/add_scenario', [Test::class, 'createScenario']);

Route::post('/add_phase', [Test::class, 'createPhase']);

Route::post('/blub', function () {
    
    return response(200);
});


