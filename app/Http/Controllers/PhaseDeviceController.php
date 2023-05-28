<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PhaseDeviceRepository;

class PhaseDeviceController extends Controller
{
    protected PhaseDeviceRepository $phase_devices;

    public function __construct(PhaseDeviceRepository $phase_devices)
    {
        $this->phase_devices = $phase_devices;
    }

    public function new(int $scenario_id, int $phase_id, Request $req)
    {
        // TODO: display phase device creation view
        return response(200);
    }

    public function create(int $scenario_id, int $phase_id, Request $req)
    {
        $data = $req->all();
        if (!$this->phase_devices->createAndSave($data['phase_id'], $data['device_id']))
        {
            return response(500);
        }
        
        return response(200);
    }

    public function show(int $scenario_id, int $phase_id, $phase_device_id)
    {
        // TODO: will return the single phase device view
        $phase_device = $this->phase_devices->getById($phase_device_id);
        if (!$phase_device)
        {
            return response(500);
        }
        return response()->json($phase_device);
    }
    
    public function destroy(int $scenario_id, int $phase_id, int $phase_device_id)
    {
        // TODO: this should redirect to the index view
        if (!$this->phase_devices->deleteById($phase_device_id))
        {
            return response(500);
        }
        return response(200);
    }

    public function addDemoMaterial(int $scenario_id, int $phase_id, int $phase_device_id, Request $req)
    {
        $data = $req->all();
        if (!$this->phase_devices->addDemoMaterial($phase_device_id, $data['demo_material_id']))
        {
            return response()->json(['error' => 'Could not add demo material'], 500);
        }
        return response(200);
    }

    public function removeDemoMaterial(int $scenario_id, int $phase_id, int $phase_device_id, Request $req)
    {
        $data = $req->all();
        if (!$this->phase_devices->removeDemoMaterial($phase_device_id, $data['demo_material_id']))
        {
            return response(500);
        }
        return response(200);
    }
}
