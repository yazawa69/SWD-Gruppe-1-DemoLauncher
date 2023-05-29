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
        // TODO: display scenario overview view
        $scenarios = $this->scenarios->getAll();
        if (!$scenarios)
        {
            return response(500);
        }
        return view('scenarios', ['scenarios' => $scenarios]);
    }

    public function new()
    {
        // TODO: display scenario creation view
        return view('scenario');
    }

    public function create(Request $req)
    {
        $data = $req->all();
        if (!$this->scenarios->createAndSave($data['name'], $data['description']))
        {
            return response(500);
        }

        return response(200);
    }

    public function show($scenario_id)
    {
        // TODO: will return the single scenario view
        $scenario = $this->scenarios->getById($scenario_id);
        if (!$scenario)
        {
            return response(500);
        }

        return view('scenario', ['scenario' => $scenario, 'phases' => $scenario->phases]);
        // return response()->json($scenario);
    }
    
    public function edit(int $scenario_id)
    {
        // TODO: will return the edit scenario view
        $scenario = $this->scenarios->getById($scenario_id);
        if (!$scenario)
        {
            return response(500);
        }
        
        return response()->json($scenario);
    }

    public function update(int $scenario_id, Request $req)
    {
        // TODO: this should update and then redirect to the show view of the updated scenario
        $data = $req->all();
        if (!$this->scenarios->updateById($scenario_id, $data['name'], $data['description']))
        {
            return response(500);
        }
        return response(200);
    }

    public function destroy(int $scenario_id)
    {
        // TODO: this should redirect to the index view
        if (!$this->scenarios->deleteById($scenario_id))
        {
            return response(500);
        }
        return response(200);
    }

}
