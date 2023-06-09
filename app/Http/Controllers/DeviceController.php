<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DeviceRepository;
use Exception;

class DeviceController extends Controller
{
    protected DeviceRepository $devices;

    public function __construct(DeviceRepository $devices)
    {
        $this->devices = $devices;
    }

    public function index(int $device_type_id)
    {
        // TODO: will return view with all devices of specified type
        $devices = $this->devices->getAllByType($device_type_id);
        if (!$devices)
        {
            return response(500);
        }
        return view('devices.index', ['devices' => $devices]);
    }

    public function new()
    {
        // TODO: display device creation view
        return view('devices.new');
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

    public function edit(int $device_id)
    {
        // TODO: will return the edit device view
        $device = $this->devices->getById($device_id);
        if (!$device)
        {
            return response("can't edit device", 500);
        }
        
        return view('devices.edit', ['device' => $device]);
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
