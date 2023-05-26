<?php

namespace App\Repositories;

use App\Models\DemoMaterialType;

class DemoMaterialTypeRepository
{
    public function createAndSave(String $filename_extension)
    {
        $demo_material_type = DemoMaterialType::create([
            'filename_extension' => $filename_extension,
        ]);

        if (!$demo_material_type)
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

    public function deleteById($demo_material_type_id)
    {
        $demo_material_type = DemoMaterialType::find($demo_material_type_id);
        if (!$demo_material_type)
        {
            return false;
        }
        return $demo_material_type->delete();
    }

}


?>