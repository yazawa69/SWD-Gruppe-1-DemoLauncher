<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\{ScenarioRepository, PhaseRepository, DeviceRepository, PhaseDeviceRepository};
use Illuminate\Http\Request;

class Test extends Controller
{
    protected ScenarioRepository $scenarios;
    protected PhaseRepository $phases;
    protected DeviceRepository $devices;
    protected PhaseDeviceRepository $phaseDevices;

    public function __construct(ScenarioRepository $scenarios, PhaseRepository $phases, DeviceRepository $devices, PhaseDeviceRepository $phaseDevices)
    {
        $this->scenarios = $scenarios;
        $this->phases = $phases;
        $this->devices = $devices;
        $this->phaseDevices = $phaseDevices;
    }

    public function createPhaseDevice(Request $req)
    {
        $data = $req->all();
        $this->phaseDevices->createAndSave($data['phase_id'], $data['device_id']);
        return response(200);
    }

    

    public function createScenario(Request $req)
    {
        $data = $req->all();
        $this->scenarios->createAndSave($data['name'], $data['description']);
        return response(200);
    }

    public function getAllScenarios()
    {
        $scenarios = $this->scenarios->getAll();
        if ($scenarios === null)
        {
            return response(404);
        }
        return view('scenarios', ['scenarios' => $scenarios]);
    }

    public function getScenario(int $scenario_id)
    {
        $scenario = $this->scenarios->getById($scenario_id);
        if ($scenario === null)
        {
            return response(404);
        }
        return response()->json($scenario);
    }

    public function updateScenario(int $scenario_id, Request $req)
    {
        $data = $req->all();
        $this->scenarios->updateById($scenario_id, $data['name'], $data['description']);
        return response(200);
    }

    public function deleteScenario(int $scenario_id)
    {
        $this->scenarios->deleteById($scenario_id);
        return response(200);
    }

    // phases
    public function createPhase(int $scenario_id, Request $req)
    {
        $data = $req->all();
        $this->phases->createAndSave($scenario_id, $data['name']);
        return response(200);
    }

    public function getAllPhases(int $scenario_id)
    {
        $phases = $this->phases->getAllByScenario($scenario_id);
        if ($phases === null)
        {
            return response(404);
        }
        return response()->json($phases);
    }

    public function getPhase(int $scenario_id, int $phase_id)
    {
        $phase = $this->phases->getById($phase_id);
        if ($phase === null)
        {
            return response(404);
        }
        return response()->json($phase);
    }

    public function updatePhase(int $scenario_id, int $phase_id, Request $req)
    {
        $data = $req->all();
        $this->phases->updateById($phase_id, $data['name']);
        return response(200);
    }

    public function deletePhase(int $scenario_id, int $phase_id)
    {
        $this->phases->delete($phase_id);
        return response(200);
    }

    // public function addDeviceToPhase(int $phase_id, Request $req)
    // {
    //     $data = $req->all();
    //     $this->phases->addDevice($phase_id, $data['device_id']);
    //     return response(200);
    // }

    // public function removeDeviceFromPhase(int $phase_id, int $device_id)
    // {
    //     $this->phases->removeDevice($phase_id, $device_id);
    //     return response(200);
    // }

    // devices
    public function createDevice(Request $req)
    {
        $data = $req->all();
        $this->devices->createAndSave($data['name'], $data['oem'], $data['product_line'], $data['serial_number']);
        return response(200);
    }

    public function getAllDevices()
    {
        $devices = $this->devices->getAll();
        if ($devices === null)
        {
            return response(404);
        }
        return response()->json($devices);
    }

    public function getAllDevicesByPhase(int $phase_id)
    {
        $devices = $this->devices->getAllByPhase($phase_id);
        if ($devices === null)
        {
            return response(404);
        }
        return response()->json($devices);
    }

    public function getDevice(int $device_id)
    {
        $device = $this->devices->getById($device_id);
        if ($device === null)
        {
            return response(404);
        }
        return response()->json($device);
    }

    public function updateDevice(int $device_id, Request $req)
    {
        $data = $req->all();
        $this->devices->updateById($device_id, $data['name'], $data['oem'], $data['product_line'], $data['serial_number']);
        return response(200);
    }

    public function deleteDevice(int $device_id)
    {
        $this->devices->deleteById($device_id);
        return response(200);
    }
}
