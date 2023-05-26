<?php

namespace App\Repositories;

use App\Models\{PhaseDevice, Phase, Device, DemoMaterial};

class PhaseDeviceRepository
{
    public function createAndSave(String $phase_id, String $device_id)
    {
        $phase_device = new PhaseDevice();

        $phase = Phase::find($phase_id);
        if (!$phase)
        {
            return false;
        }

        $device = Device::find($device_id);
        if (!$device)
        {
            return false;
        }
        
        $phase_device->phase()->associate($phase);
        $phase_device->device()->associate($device);
        
        return $phase_device->save();
    }

    public function deleteById(String $phase_device_id)
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
        if (!$phase_device)
        {
            return false;
        }

        $demo_material = DemoMaterial::find($demo_material_id);
        if (!$demo_material)
        {
            return false;
        }

        $phase_device->demoMaterials()->attach($demo_material);
    }

    public function removeDemoMaterial($phase_device_id, $demo_material_id)
    {
        $phase_device = PhaseDevice::find($phase_device_id);
        if (!$phase_device)
        {
            return false;
        }

        $demo_material = DemoMaterial::find($demo_material_id);
        if (!$demo_material)
        {
            return false;
        }

        $phase_device->demoMaterials()->detach($demo_material);
    }

}

?>