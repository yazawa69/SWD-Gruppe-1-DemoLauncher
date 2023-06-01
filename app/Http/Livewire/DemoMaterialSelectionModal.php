<?php

namespace App\Http\Livewire;

use App\Models\DemoMaterialType;
use Livewire\Component;

class DemoMaterialSelectionModal extends Component
{

    public $demo_material_types;
    public $demo_material_type;
    public $demo_materials;

    public function mount()
    {
        $this->demo_material_types = DemoMaterialType::all();
    }

    public function loadDemoMaterials($demo_material_type_id)
    {
        $this->demo_material_type = DemoMaterialType::find($demo_material_type_id);
        $this->demo_materials = $this->demo_material_type->demoMaterials;
    }

    public function resetDemoMaterials()
    {
        $this->demo_material_type = null;
        $this->demo_materials = [];
    }

    public function render()
    {
        return view('livewire.demo-material-selection-modal');
    }
}
