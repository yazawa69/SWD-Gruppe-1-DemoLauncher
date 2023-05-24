<?php

namespace App\Repositories;

use App\Models\{PhaseDevice, Phase, Device, DemoMaterial};

class PhaseDeviceRepository
{
    public function createAndSave(String $name, String $data): bool
    {
        $demo_material = DemoMaterial::create([
            'name' => $name,
            'data' => $data,
        ]);

        $phase = Phase::find($phase_id);
        if ($phase === null)
        {
            return null;
        }

        $device = Device::find($device_id);
        if ($device === null)
        {
            return null;
        }

        $phase_device->phase_id = $phase_id;
        $phase_device->device_id = $device_id;
        
        $saved = $phase_device->save();

        return $saved;
    }

    public function delete(String $phase_device_id): bool
    {
        $phase_device = PhaseDevice::find($phase_device_id);
        if ($phase_device === null)
        {
            return null;
        }

        $deleted = $phase_device->delete();

        return $deleted;
    }

    public function getById(int $phase_device_id)
    {
        $phase_device = PhaseDevice::find($phase_device_id);
        return $phase_device;
    }

    public function addDemoMaterial($phase_device_id, $demo_material_id)
    {
        $phase_device = PhaseDevice::find($phase_device_id);
        if ($phase_device === null)
        {
            return null;
        }

        $demo_material = DemoMaterial::find($demo_material_id);
        if ($demo_material === null)
        {
            return null;
        }

        $phase_device->demoMaterials()->attach($demo_material);
    }

    public function removeDemoMaterial($phase_device_id, $demo_material_id)
    {
        $phase_device = PhaseDevice::find($phase_device_id);
        if ($phase_device === null)
        {
            return null;
        }

        $demo_material = DemoMaterial::find($demo_material_id);
        if ($demo_material === null)
        {
            return null;
        }

        $phase_device->demoMaterials()->detach($demo_material);
    }

}

?>