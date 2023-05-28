<?php

namespace App\Repositories;

use App\Models\DeviceType;

class DeviceTypeRepository
{
    public function createAndSave(String $name, String $icon)
    {
        $device_type = DeviceType::create([
            'name' => $name,
            'icon' => $icon
        ]);
        return $device_type;
    }

    public function getAll()
    {
        $device_types = DeviceType::all();
        return $device_types;
    }

    public function getById(int $device_type_id)
    {
        $device_type = DeviceType::find($device_type_id);
        return $device_type;
    }

    public function deleteById(int $device_type_id)
    {
        $device_type = DeviceType::find($device_type_id);
        return $device_type->delete();
    }

}

?>