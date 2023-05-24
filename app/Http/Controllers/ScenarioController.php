<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ScenarioRepository;

class ScenarioController extends Controller
{
    
    protected ScenarioRepository $scenarios;

    public function __construct(ScenarioRepository $scenarios)
    {
        $this->scenarios = $scenarios;
    }

    public function index()
    {
        // TODO: will return the scenarios overview view
        $scenarios = $this->scenarios->getAll();
        if ($scenarios === null)
        {
            return response(404);
        }
        return view('scenarios', ['scenarios' => $scenarios]);
    }

    public function show($scenario_id)
    {
        // TODO: will return the single scenario view
        $scenario = $this->scenarios->getById($scenario_id);
        if ($scenario === null)
        {
            return response(404);
        }
        return response()->json($scenario);
    }
    
    public function edit(int $scenario_id)
    {
        // TODO: will return the edit scenario view
        $scenario = $this->scenarios->getById($scenario_id);
        if ($scenario === null)
        {
            return response(404);
        }
        return response()->json($scenario);
    }

    public function create(Request $req)
    {
        // TODO: returns no view, simply makes db insert
        $data = $req->all();
        $this->scenarios->createAndSave($data['name'], $data['description']);
        return response(200);
    }

    public function update(int $scenario_id, Request $req)
    {
        // TODO: this should redirect to the show view of the updated scenario
        $data = $req->all();
        $this->scenarios->updateById($scenario_id, $data['name'], $data['description']);
        return response(200);
    }

    public function delete(int $scenario_id)
    {
        // TODO: this should redirect to the index view
        $this->scenarios->deleteById($scenario_id);
        return response(200);
    }

}
