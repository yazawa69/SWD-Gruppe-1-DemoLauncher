<?php

namespace App\Repositories;

use App\Models\{DemoMaterial, DemoMaterialType};

class DemoMaterialRepository
{
    public function createAndSave(int $demo_material_type_id, String $name, String $file_path, String $description)
    {
        $demo_material = new DemoMaterial();
        $demo_material->name = $name;
        $demo_material->file_path = $file_path;
        $demo_material->description = $description;

        $demo_material_type = DemoMaterialType::find($demo_material_type_id);
        if (!$demo_material_type)
        {
            return false;
        }

        $demo_material->demoMaterialType()->associate($demo_material_type);
        return $demo_material->save();
    }

    public function updateById(int $demo_material_id, String $name, $file)
    {
        $demo_material = DemoMaterial::find($demo_material_id);
        if (!$demo_material)
        {
            return false;
        }

        $demo_material->name = $name;
        $demo_material->file = $file;
        return $demo_material->save();
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

    public function getAllNamesByType(int $demo_material_type_id)
    {
        $demo_material_names = DemoMaterial::where('demo_material_type_id', $demo_material_type_id)->get('name');
        return $demo_material_names;
    }

    public function deleteById(int $demo_material_id)
    {
        $demo_material = DemoMaterial::find($demo_material_id);
        return $demo_material->delete();
    }
}

?>