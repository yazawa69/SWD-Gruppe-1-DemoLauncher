<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DeviceRepository;

class DeviceController extends Controller
{
    protected DeviceRepository $devices;

    public function __construct(DeviceRepository $devices)
    {
        $this->devices = $devices;
    }

    public function show(int $scenario_id, int $phase_id, int $device_id)
    {
        // TODO: will return the single device view
        $device = $this->devices->getById($device_id);
        if ($device === null)
        {
            return response(404);
        }
        return response()->json($device);
    }

}
