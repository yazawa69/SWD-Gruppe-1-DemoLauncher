<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\DemoMaterialTypeRepository;

class DemoMaterialTypeController extends Controller
{
    protected DemoMaterialTypeRepository $demo_material_types;

    public function __construct(DemoMaterialTypeRepository $demo_material_types)
    {
        $this->demo_material_types = $demo_material_types;
    }

    public function index()
    {
        // TODO: display demo material type overview view
        $demo_material_types = $this->demo_material_types->getAll();
        if(!$demo_material_types)
        {
            return response(500);
        }
        return response(200)->json($demo_material_types);
    }

    public function create(Request $req)
    {
        // this method will only be used by developers.
        $data = $req->all();
        if(!$this->demo_material_types->createAndSave($data['filename_extension']))
        {
            return response(500);
        }
        return response(200);
    }

    public function destroy(int $demo_material_type_id)
    {
        // this method will only be used by developers.
        if(!$this->demo_material_types->deleteById($demo_material_type_id))
        {
            return response(500);
        }
        return response(200);
    }

}
