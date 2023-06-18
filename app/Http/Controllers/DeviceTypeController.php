<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DeviceTypeRepository;

class DeviceTypeController extends Controller
{
    
    protected DeviceTypeRepository $device_types;

    public function __construct(DeviceTypeRepository $device_types)
    {
        $this->device_types = $device_types;
    }

    public function index()
    {
        // display device types type overview view
        $device_types = $this->device_types->getAll();
        if(!$device_types)
        {
            return response(500);
        }
        return view('device-types.index', ['device_types' => $device_types]);
    }

    public function create(Request $req)
    {
        // this method will only be used by developers.
        $data = $req->all();
        if(!$this->device_types->createAndSave($data['name'], $data['icon']))
        {
            return response(500);
        }
        return response(200);
    }

    public function destroy(int $device_type_id)
    {
        // this method will only be used by developers.
        if(!$this->device_types->deleteById($device_type_id))
        {
            return response(500);
        }
        return response(200);
    }
}
