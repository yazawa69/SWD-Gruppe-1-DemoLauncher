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
        // display scenario overview view
        $scenarios = $this->scenarios->getAll();
        if (!$scenarios)
        {
            return response(500);
        }
        return view('scenarios.index', ['scenarios' => $scenarios]);
    }

    public function new(int $scenario_id)
    {
        // display scenario creation view
            $scenario = $this->scenarios->getById($scenario_id);
            if (!$scenario)
            {
                return response(500);
            }
            
            return view('scenarios.new', ['scenario' => $scenario, 'phases' => $scenario->phases]);
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
    
    public function edit(int $scenario_id)
    {
        // return the edit scenario view
        $scenario = $this->scenarios->getById($scenario_id);
        if (!$scenario)
        {
            return response(500);
        }
        
        return view('scenarios.edit', ['scenario' => $scenario, 'phases' => $scenario->phases]);
    }

    public function update(int $scenario_id, Request $req)
    {
        // update scenario
        $data = $req->all();
        if (!$this->scenarios->updateById($scenario_id, $data['name'], $data['description']))
        {
            return response(500);
        }
        return response(200);
    }

    public function destroy(int $scenario_id)
    {
        // delete scenario
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