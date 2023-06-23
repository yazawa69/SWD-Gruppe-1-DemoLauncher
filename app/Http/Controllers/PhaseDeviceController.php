<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\PhaseDeviceRepository;
use Illuminate\Support\Facades\Http;
use App\Http\Services\Hololens\HololensClient;

use Exception;
// use HololensClient;

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

    public function loadMaterial(int $scenario_id, int $phase_id, int $phase_device_id, Request $req){
        
        // the following code only loads material in case a livestream capapable device is found in the frontend and was selected as the material
        // get request data
        $ip = $this->phase_devices->getById($phase_device_id)->device->ip_address;
        $live_stream_device_id = $req->header('live_stream_device_id');
        
        // request to flask with device id
        $request = Http::withHeaders([
            'Deviceid' => strval($live_stream_device_id),
        ])->get('http://'. $ip .'/live-stream-listener');
        
        // wait for response and flask starts a thread with req to getLivestream
    }

    public function getLivestream(Request $req){
        
        $live_stream_device_id = $req->header('live_stream_device_id');
        $ip = $this->phase_devices->getById($live_stream_device_id)->device->ip_address;

        $hololens = new HololensClient($ip);
        return $hololens->getStreamHtmlString();

    }

}


