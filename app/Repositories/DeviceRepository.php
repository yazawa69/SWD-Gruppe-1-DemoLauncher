<?php

namespace App\Repositories;

use App\Models\{Device, DeviceType};

class DeviceRepository
{
    public function createAndSave(int $device_type_id, String $name, String $oem, String $product_line, String $serial_number): bool
    {
        $device = new Device();

        $device->name = $name;
        $device->oem = $oem;
        $device->product_line = $product_line;
        $device->serial_number = $serial_number;

        $device_type = DeviceType::find($device_type_id);
        if ($device_type === null)
        {
            return null;
        }

        $device->deviceType()->associate($device_type);

        $saved = $device->save();

        return $saved;
    }

    public function getAll()
    {
        $devices = Device::all();
        return $devices;
    }

    public function getById(int $device_id)
    {
        $device = Device::find($device_id);
        return $device;
    }

    public function updateById(int $device_id, String $name, String $oem, String $product_line, String $serial_number)
    {
        $device = Device::find($device_id);
        $device->name = $name;
        $device->oem = $oem;
        $device->product_line = $product_line;
        $device->serial_number = $serial_number;
        $device->save();
    }

    public function deleteById(int $device_id)
    {
        $device = Device::find($device_id);
        $device->delete();
    }

    public function getAllByPhase(int $phase_id)
    {
        $devices = Device::where('phase_id', $phase_id)->get();
        return $devices;
    }

}

?>