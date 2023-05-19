<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoMaterialController extends Controller
{
    public function index()
    {
        return view('demo_material.index');
    }
}