<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PhaseDeviceRepository;
use Exception;

class PhaseDeviceController extends Controller
{
    protected PhaseDeviceRepository $phase_devices;

    public function __construct(PhaseDeviceRepository $phase_devices)
    {
        $this->phase_devices = $phase_devices;
    }

    public function new(int $scenario_id, int $phase_id, Request $req)
    {
        // display phase device creation view
        return response(200);
    }

    public function create(int $scenario_id, int $phase_id, Request $req)
    {
        $data = $req->all();
        
        // catch DB related errors        
        try 
        {
            $saved = $this->phase_devices->createAndSave($data['phase_id'], $data['device_id']);
        }
        catch(Exception $e)
        {
            return response($e->getMessage(), 500);
        }
        if(!$saved) 
        {
            // entry could not be inserted into DB
            return response(500);
        }

        return response(200);
    }

    public function show(int $scenario_id, int $phase_id, $phase_device_id)
    {
        // return the single phase device view
        $phase_device = $this->phase_devices->getById($phase_device_id);
        if (!$phase_device)
        {
            return response(500);
        }
        return response()->json($phase_device);
    }
    
    public function destroy(int $scenario_id, int $phase_id, int $phase_device_id)
    {
        // delete the phase device
        if (!$this->phase_devices->deleteById($phase_device_id))
        {
            return response(500);
        }
        return response(200);
    }

    public function addDemoMaterial(int $scenario_id, int $phase_id, int $phase_device_id, Request $req)
    {
        $data = $req->all();

        $phase_device_demo_materials = $this->phase_devices->getById($phase_device_id)->demoMaterials;

        if ($phase_device_demo_materials->contains($data['demo_material_id']))
        {
            return response()->json(['error' => 'Demo material already added'], 500);
        }

        if (!$this->phase_devices->addDemoMaterial($phase_device_id, $data['demo_material_id']))
        {
            return response()->json(['error' => 'Could not add demo material'], 500);
        }
        return response(200);
    }

    public function removeDemoMaterial(int $scenario_id, int $phase_id, int $phase_device_id,  int $demo_material_id)
    {
        if (!$this->phase_devices->removeDemoMaterial($phase_device_id, $demo_material_id))
        {
            return response(500);
        }
        return response(200);
    }
}
