<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScenarioController extends Controller
{
    public function index()
    {
        return view('scenario.index');
    }
}