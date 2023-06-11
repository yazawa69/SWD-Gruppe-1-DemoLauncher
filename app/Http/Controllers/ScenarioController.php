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

    public function landing()
    {
        $scenarios = $this->scenarios->getAll();
        if (!$scenarios)
        {
            return response(500);
        }
        return view('scenarios.landing', ['scenarios' => $scenarios]);
    }

    public function index()
    {
        // TODO: display scenario overview view
        $scenarios = $this->scenarios->getAll();
        if (!$scenarios)
        {
            return response(500);
        }
        return view('scenarios.index', ['scenarios' => $scenarios]);
    }

    public function new()
    {
        // TODO: display scenario creation view
        return view('scenarios.scenario-new');
    }

    public function create(Request $req)
    {
        $data = $req->all();
        $scenario = $this->scenarios->createAndSave($data['name'], $data['description']);
        if (!$scenario)
        {
            return response(500);
        }
        return response()->json(['scenario' => $scenario]);
    }

    public function show($scenario_id)
    {
        // TODO: remove this method - not necessary for scenarios. Should be documented in some way. 
    }
    
    public function edit(int $scenario_id)
    {
        // TODO: will return the edit scenario view
        $scenario = $this->scenarios->getById($scenario_id);
        if (!$scenario)
        {
            return response(500);
        }
        
        return view('scenarios.edit', ['scenario' => $scenario, 'phases' => $scenario->phases]);
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

    public function run(int $scenario_id, int $phase_position)
    {
        $scenario = $this->scenarios->getById($scenario_id);
        if (!$scenario)
        {
            return response(500);
        }

        $phase = $this->scenarios->getScenarioPhase($scenario_id, $phase_position);
        if (!$phase)
        {
            return response(500);
        }
        $phase_devices = $phase->phaseDevices;
        
        return view('scenarios.run', ['scenario' => $scenario, 'phases' => $scenario->phases, 'phase' => $phase, 'phase_devices' => $phase_devices]);
    }

}
