<?php

namespace App\Repositories;

use App\Models\{DemoMaterial, DemoMaterialType};

class DemoMaterialRepository
{
    public function createAndSave(int $demo_material_type_id, String $name, $file): bool
    {
        $demo_material = new DemoMaterial();
        $demo_material->name = $name;
        $demo_material->file = $file;

        $demo_material_type = DemoMaterialType::find($demo_material_type_id);
        if ($demo_material_type === null)
        {
            return false;
        }

        $demo_material->demoMaterialType()->associate($demo_material_type);
        $demo_material->save();

        return true;
    }

    public function getById(int $demo_material_id)
    {
        $demo_material = DemoMaterial::find($demo_material_id);
        return $demo_material;
    }

    public function getAllByType(int $demo_material_type_id)
    {
        $demo_materials = DemoMaterial::where('demo_material_type_id', $demo_material_type_id)->get();
        return $demo_materials;
    }

    public function deleteById(int $demo_material_id)
    {
        $demo_material = DemoMaterial::find($demo_material_id);
        $demo_material->delete();
    }
}

?>