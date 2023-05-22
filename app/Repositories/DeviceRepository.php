<?php

namespace App\Repositories;

use App\Models\Device;



class DeviceRepository
{
    public function createAndSave(String $name, String $oem, String $product_line, String $serial_number)
    {
        $scenario = Device::create([
            'name' => $name,
            'oem' => $oem,
            'product_line' => $product_line,
            'serial_number' => $serial_number,
        ]);
        return $scenario;
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