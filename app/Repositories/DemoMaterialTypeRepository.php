<?php

namespace App\Repositories;

use App\Models\DemoMaterialType;

class DemoMaterialTypeRepository
{
    public function createAndSave(String $filename_extension): bool
    {
        $demo_material_type = DemoMaterialType::create([
            'filename_extension' => $filename_extension,
        ]);

        if ($demo_material_type === null)
        {
            return false;
        }
        return true;
    }

    public function getAll()
    {
        $demo_material_types = DemoMaterialType::all();
        return $demo_material_types;
    }

}


?>