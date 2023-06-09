<?php

namespace App\Repositories;

use App\Models\Device;

class DeviceRepository
{
    public function createAndSave(int $device_type_id, String $name, String $oem, String $serial_number)
    {
        $device = new Device();

        $device->name = $name;
        $device->oem = $oem;
        $device->serial_number = $serial_number;
        $device->device_type_id = $device_type_id;

        return $device->save();
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

    public function updateById(int $device_id, String $name, String $oem, String $serial_number)
    {
        $device = Device::find($device_id);
        $device->name = $name;
        $device->oem = $oem;
        $device->serial_number = $serial_number;
        return $device->save();
    }

    public function deleteById(int $device_id)
    {
        $device = Device::find($device_id);
        return $device->delete();
    }

    public function getAllByType(int $device_type_id)
    {
        $devices = Device::where('device_type_id', $device_type_id)->get();
        return $devices;
    }

}

?>