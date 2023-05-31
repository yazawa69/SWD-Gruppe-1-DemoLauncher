<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DemoMaterialRepository;

class DemoMaterialController extends Controller
{
    protected DemoMaterialRepository $demo_materials;

    public function __construct(DemoMaterialRepository $demo_materials)
    {
        $this->demo_materials = $demo_materials;
    }

    public function index(int $demo_material_type_id)
    {
        // TODO: will return view with all demo material of specified type
        $demo_materials = $this->demo_materials->getAllByType($demo_material_type_id);
        if (!$demo_materials)
        {
            return response(500);
        }
        return view('demo-materials.index', ['demo_materials' => $demo_materials]);
    }

    public function new(Request $req)
    {
        // TODO: display demo material creation view
        return view('demo-materials.new');
    }

    public function create(int $demo_material_type_id, Request $req)
    {
        $data = $req->all();
        if (!$this->demo_materials->createAndSave($demo_material_type_id, $data['name'], $data['file']))
        {
            return response(500);
        }
        return response(200);
    }

    public function show(int $demo_material_type_id, int $demo_material_id)
    {
        // TODO: will return the single demo material view
        $demo_material = $this->demo_materials->getById($demo_material_id);
        if (!$demo_material)
        {
            return response(500);
        }
        return response()->json($demo_material);
    }

    public function edit(int $demo_material_type_id, int $demo_material_id)
    {
        // TODO: will return the edit demo materials view
        $demo_material = $this->demo_materials->getById($demo_material_id);
        if (!$demo_material)
        {
            return response(500);
        }
        
        return view('demo-materials.edit', ['demo_material' => $demo_material]);
    }

    public function update(int $demo_material_type_id, int $demo_material_id, Request $req)
    {
        // TODO: this should update and then redirect to the show view of the updated demo material
        $data = $req->all();
        if (!$this->demo_materials->updateById($demo_material_id, $data['name'], $data['file']))
        {
            return response(500);
        }
        return response(200);
    }

    public function destroy(int $demo_material_id)
    {
        // TODO: this should redirect to the index view
        if (!$this->demo_materials->deleteById($demo_material_id))
        {
            return response(500);
        }
        return response(200);
    }
}
