<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\{DeviceRepository, DeviceTypeRepository};
use Exception;

class DeviceController extends Controller
{
    protected DeviceRepository $devices;
    protected DeviceTypeRepository $device_types;

    public function __construct(DeviceRepository $devices, DeviceTypeRepository $device_types)
    {
        $this->devices = $devices;
        $this->device_types = $device_types;

    }

    public function index(int $device_type_id)
    {
        // TODO: will return view with all devices of specified type
        $device_type = $this->device_types->getById($device_type_id);
        
        
        $devices = $this->devices->getAllByType($device_type_id);
        if (!$devices)
        {
            return response(500);
        }
        return view('devices.index', ['devices' => $devices, 'device_type' => $device_type]);
    }

    public function new(int $device_type_id)
    {
        $device_types = $this->device_types->getById($device_type_id);
        // TODO: display device creation view
        return view('devices.new', ['device_type' => $device_types]);
    }

    public function create(int $device_type_id, Request $req)
    {
        $data = $req->all();
        
        // catch DB related errors
        try 
        {
            $saved = $this->devices->createAndSave($device_type_id, $data['name'], $data['oem'], $data['serial_number']);
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

    public function show(int $device_id)
    {
        // TODO: will return the single device view
        $device = $this->devices->getById($device_id);
        if (!$device)
        {
            return response(500);
        }
        return response()->json($device);
    }

    public function edit(int $device_type_id, int $device_id)
    {
        // TODO: will return the edit device view
        $device_types = $this->device_types->getById($device_type_id);
        $device = $this->devices->getById($device_id);
        if (!$device)
        {
            return response("can't edit device", 500);
        }
        
        return view('devices.edit', ['device' => $device, 'device_type' => $device_types]);
    }

    public function update(int $device_id, Request $req)
    {
        // TODO: this should update and then redirect to the show view of the updated device
        $data = $req->all();
        if (!$this->devices->updateById($device_id, $data['name'], $data['oem'], $data['serial_number']))
        {
            return response(500);
        }
        return response(200);
    }

    public function destroy(int $device_id)
    {
        // TODO: this should redirect to the index view
        if (!$this->devices->deleteById($device_id))
        {
            return response(500);
        }
        return response(200);
    }

}
