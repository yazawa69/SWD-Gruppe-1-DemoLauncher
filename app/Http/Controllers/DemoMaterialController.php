<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\{DemoMaterialRepository, DemoMaterialTypeRepository};
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Exception;

class DemoMaterialController extends Controller
{
    protected DemoMaterialRepository $demo_materials;
    protected DemoMaterialTypeRepository $demo_material_types;

    public function __construct(DemoMaterialRepository $demo_materials, DemoMaterialTypeRepository $demo_material_types)
    {
        $this->demo_materials = $demo_materials;
        $this->demo_material_types = $demo_material_types;
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
        $file = $req->file;
        // check if file is empty
        if ($file->getSize() === 0) {
            return response("File is empty!", 500);
        }
        // check if the filetypes match
        $demo_material_type = $this->demo_material_types->getById($demo_material_type_id);
        $extension = $file->extension();
        if (".$extension" != $demo_material_type->filename_extension)
        {
            return response("File doesn't match the selected filetype!", 500);
        }
        // check if name already taken
        if ($this->demo_materials->getAllNamesByType($demo_material_type_id)->contains('name', $req->name))
        {
            return response("Name already taken", 500);
        }

        DB::transaction(function() use ($demo_material_type, $req) {
            $file = $req->file;

            // insert the demo material entry into database
            $extension = $file->extension();
            $org_file_name = $file->getClientOriginalName();
            $file_name = "$req->name-$org_file_name";
            $file_path = "materials/$extension/$file_name";
            if (!$this->demo_materials->createAndSave($demo_material_type->id, $req->name, $file_path, $req->description))
            {
                throw new Exception("Failed to create demo material");
            }

            // store the file
            if (!$req->file->storeAs("materials/$extension", $file_name))
            {
                throw new Exception("Failed to store file");
            }
        });
        
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
        // get the current demo material
        $current_demo_mat = $this->demo_materials->getById($demo_material_id);
        $data = $req->all();
        // check if name already taken
        if ($current_demo_mat->name != $req->name){
            if ($this->demo_materials->getAllNamesByType($demo_material_type_id)->contains('name', $req->name))
            {
                return response("Name already taken", 500);
            }
        }

        $file = $req->file;
        // check if file is empty
        if ($file->getSize() === 0) {
            return response("File is empty!", 500);
        }
        // check if the filetypes match
        $demo_material_type = $this->demo_material_types->getById($demo_material_type_id);
        $extension = $file->extension();
        if (".$extension" != $demo_material_type->filename_extension)
        {
            return response("File doesn't match the selected filetype!", 500);
        }
        
        $org_file_name = $file->getClientOriginalName();
        $file_name = "$req->name-$org_file_name";
        $file_path = "materials/$extension/$file_name";
        $data = ['name'=>$data['name'], 'description'=>$data['description'], 'file_path'=>$file_path];

        // delete the old file (if it won't be overwritten)
        $former_file_path = $current_demo_mat->file_path;
        if ($former_file_path != $file_path)
        {
            Storage::delete($former_file_path);
        }

        // store the file
        if (!$req->file->storeAs("materials/$extension", $file_name))
        {
            throw new Exception("Failed to store file");
        }

        if (!$this->demo_materials->updateById($demo_material_id, $data))
        {
            return response(500);
        }

        return response(200);
    }

    public function destroy(int $demo_material_type_id, int $demo_material_id)
    {
        $current_demo_mat = $this->demo_materials->getById($demo_material_id);
        $file_path = $current_demo_mat->file_path;

        // delete the file
        Storage::delete($file_path);
        

        if (!$this->demo_materials->deleteById($demo_material_id))
        {
            return response(500);
        }
        return response(200);
    }
}

    }
}