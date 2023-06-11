<?php

namespace App\Repositories;

use App\Models\{PhaseDevice, Phase, Device, DemoMaterial};

class PhaseDeviceRepository
{
    public function createAndSave(String $phase_id, String $device_id)
    {
        $phase_device = new PhaseDevice();
        
        $phase_device->phase_id = $phase_id;
        $phase_device->device_id = $device_id;

        return $phase_device->save();
    }

    public function deleteById(String $phase_device_id)
    {
        $phase_device = PhaseDevice::find($phase_device_id);
        if ($phase_device === null)
        {
            return null;
        }

        return $phase_device->delete();
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
        return true;
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
        return true;
    }

}

?>