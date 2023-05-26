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

    public function new(Request $req)
    {
        // TODO: display phase device creation view
        return response(200);
    }

    public function create(Request $req)
    {
        $data = $req->all();
        if (!$this->phase_devices->createAndSave($data['phase_id'], $data['device_id']))
        {
            return response(500);
        }
        
        return response(200);
    }

    public function show($phase_device_id)
    {
        // TODO: will return the single phase device view
        $phase_device = $this->phase_devices->getById($phase_device_id);
        if (!$phase_device)
        {
            return response(500);
        }
        return response(200)->json($phase_device);
    }
    
    public function destroy(int $phase_device_id)
    {
        // TODO: this should redirect to the index view
        if (!$this->phase_devices->deleteById($phase_device_id))
        {
            return response(500);
        }
        return response(200);
    }

    public function addDemoMaterial(int $phase_device_id, int $demo_material_id)
    {
        
        if (!$this->phase_devices->addDemoMaterial($phase_device_id, $demo_material_id))
        {
            return response(500);
        }
        return response(200);
    }

    public function removeDemoMaterial(int $phase_device_id, int $demo_material_id)
    {
        if (!$this->phase_devices->removeDemoMaterial($phase_device_id, $demo_material_id))
        {
            return response(500);
        }
        return response(200);
    }
}
